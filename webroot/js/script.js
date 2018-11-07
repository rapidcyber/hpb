/*
*  HPB Helpers Class
*  @package HPB
*/
HPB.Cookies;

HPB.Helpers = {
  getDataFromElems:function(str,ele){
    var arr=[];
    $(str).find(ele).each(function(idx){
      var me=$(this),
        obj={
          name:me.data("name") ? me.data("name") : me.attr("data-name"),
          price:me.data("price") ? me.data("price") : me.attr("data-price"),
          descrip:me.data("description") ? me.data("description") : me.attr("data-description"),
          link:me.data("link") ? me.data("link") : me.attr("data-link"),
          bgphoto:me.data("bgphoto") ? me.data("bgphoto") : me.attr("data-bgphoto"),
          itemId:me.data("id") ? me.data("id") : me.attr("data-id")
        }
      return arr.push(obj);
    });
    return arr;
  },
  GetModels : function(str, str2, elem){
    if( $(str).length > 0 ) { var arr = HPB.Helpers.getDataFromElems(str2, elem); return arr; }
    else { return false }
  },
  TriggerOverlay : function(str,title,cls,isItem){
    var c = cls ? 'hpb-overlay ' + cls : 'hpb-overlay', options;
    if(typeof isItem != "undefined"){
      options = {helpers:{title:{type:'inside'}},'topRatio':0.09,'minHeight':300,'type':'inline','title':title,'wrapCSS':c,'autoDimensions':false,'transitionIn':'none','transitionOut':'none','afterClose':function(){ $("body").find(".hpb-overlay").remove(); }};
    } else {
      options = {helpers:{title:{type:'inside'}},'type':'inline','title':title,'wrapCSS':c,'autoDimensions':false,'transitionIn':'none','transitionOut':'none','afterClose':function(){ $("body").find(".hpb-overlay").remove(); }};
    }
    (function(cb){
      // $.fancybox.showLoading();
      var preloader = document.createElement('div'),
          imgpre = document.createElement('img');
      preloader.setAttribute('id', 'fancybox-loading');
      imgpre.setAttribute('src', HPB.Globals.WebRoot + 'img/fancybox_loading.gif')

      $(imgpre).css({
        position: 'absolute',
        top: '50%',
        left : '50%'
      });

      $(preloader).append($(imgpre));
      $(preloader).css({
        width: "100%",
        height: $(window).height(),
        backgroundColor: '#000',
        position : 'fixed',
        "z-index" : 99992,
        opacity : .9,
        "transition-timing-function" : "cubic-bezier(.22,.61,.36,1)"
      });
      $('#root').prepend($(preloader));
      window.setTimeout(function(){ cb.apply(); },1600);
    })(function(){
      // $.fancybox.open( items, opts, index );
      $.fancybox.open( $(str), options )
      $('#fancybox-loading').remove();
        // $.fancybox(str,options);
        // $.fancybox.hideLoading();
    });

    return false;
  },
  HoverDetailsTemplate : function(obj){
    if(typeof obj != "object" && typeof obj.length != "undefined"){ return false }
    var tmpl =
      "<div class='hover-tmpl clearfix'>"+
        "<div class='relative'>"+
          "<div class='arrow'></div>"+
          "<div class='details'>"+
            "<div class='item-name'>"+obj['itemName']+"</div>"+
            "<div class='bazaar-name'><span>from</span> "+obj['merchantName']+"</div>"+
            "<div class='description'>"+obj['itemDescrip']+"</div>"+
            "<div class='item-price'>P "+obj['itemPrice']+"</div>"+
          "</div>"+
        "</div>"+
      "</div>";

    return tmpl;
  }
};

/*
*  HPB Models Class
*  @package HPB
*/
HPB.Models = {
  MostWanted : function(){
    return HPB.Helpers.GetModels(".most-wanted",".most-wanted","img");
  },
  OnSale : function(){
    return HPB.Helpers.GetModels(".on-sale",".on-sale .prod-list","a");
  },
  FeaturedBrands : function(){
    return HPB.Helpers.GetModels(".featured-brands",".featured-brands .prod-list","a");
  },
  NewArrivals : function(){
    return HPB.Helpers.GetModels(".new-arrivals",".new-arrivals","img");
  },
  WhatsHot : function(){
    return HPB.Helpers.GetModels(".whats-hot",".whats-hot","img");
  },
  CompleteList : function(){
    return HPB.Helpers.GetModels(".complete-list",".complete-list","img");
  }
};

/*
*  HPB Events Class
*  @package HPB
*/
HPB.Events = {
  BeforeStart : function(cb){
    $(".submenu-list").each(function(idx,el){
      var me=$(this);
      if(me.find('ul').children().length == 0){ $(el).remove(); }
    });
    var buybox = $(".buy-item-box");
    if(buybox.length == 1){
      HPB.Helpers.TriggerOverlay(".buy-item-box","","buy-box-overlay","item");
    }
    cb.apply();
  },
  MenuSlider : function(e,elem){
    var menuChosen = "#" + (elem.text()).replace(" ","-").replace("'","").toLowerCase();
    $(menuChosen).slideDown(200);
    e.preventDefault();
    return false;
  },
  SomeValidation : function(elem){
    var inputs = elem.find("input,select,textarea"),errs=[];
    $.each(inputs,function(idx){
      var me = $(this);
      if(me.attr('type') == "text" || me.attr('type') == "email" || me.attr('type') == "password" || me.attr){
        me.val().length <= 0 ? errs.push(me.attr('placeholder') + " is left blank.") : errs;
      }
      if(me.attr('type') == "password"){
        if($("input#verify-password").length > 0) {
          if(me.val() != $("input#verify-password").val() || $("input#verify-password").val().length <= 0 || me.val().length <=0 ){
           errs.push("Please verify your password.");
          }
        }
      }
    });
    return errs.length <=0 ? true : HPB.Helpers.TriggerOverlay("<div id='flashMessage' class='js-errors'><p>"+errs.join("</p><p>")+"</p></div>","Oops! Before we can continue..");
  },
  StickyHeader : function(){

    var e = ($('.nav').clone()).addClass('stick-header'),
        srch = $('.search-part').clone(),
        root = $('#root'),
        trig = $('.main-content').offset().top - 10;

    srch.find('form').attr('id','SearchTopSticky');
    e.find('.user-nav').prepend(srch);
    // console.log(e);
    root.prepend(e);

    $(window, document).scroll(function(){
      // console.log();
      var p = $('html,body'),t;
      e.hide();
      if(p.scrollTop()>trig){
        e.css('top',p.scrollTop()-100 + 'px');
        t = window.setTimeout(function(){
            if(p.scrollTop()>trig){
              e.show().stop().animate({
                'top': p.scrollTop() + 'px'
              },100);
            }
            window.clearTimeout(t);
            return false;
        },1000);
        $(".whats-hot .box-description, section.new-arrivals .box-description, .brands .box-description").slideDown(200);
      } else {
        $(".whats-hot .box-description, section.new-arrivals .box-description, .brands .box-description").slideUp(200);
        window.clearTimeout(t);
      }
    });
  },
  SliderPreviewA : function(elemArr){
    if(elemArr.length <= 0){ return false; }
    var speed = 110;
    $.each(elemArr,function(idx,el){
      var slider = $(el).find('.item-slider'),
          details = $(el).find('.item-details'),
          controls = slider.find('.item-slider-nav'),
          container = slider.find('.item-slider-container'),
          items = container.find('img');

      if(slider.length > 0 && items.length >= 9){
        container.removeClass().addClass('overflow-slider').width((items.length*110)+(items.length*3));
        container.wrap('<div class="item-container item-slider-container"></div>');
        controls.click(function(e){
          var me = $(this), mv, limit = ((Math.ceil(items.length/6)*110)-container.width())*-1,
              marg = parseInt(container.css('margin-left')),
              move = me.attr('class').indexOf('left') >= 0 ? true : false;
          if(!move && marg <= 0){
            mv = marg == 0 ? marg + speed : (marg *-1) + speed;
            mv = limit <= mv ? limit : mv;
            container.stop().animate({
              // 'margin-left': (mv)*-1
              'margin-left': (mv)*-1
            });
          } else {
            mv = marg == 0 ? marg : (marg *-1) - speed;
            mv = mv < 110 ? 0 : mv;
            container.stop().animate({
              'margin-left': (mv)*-1
            });
          }
          e.preventDefault();
          return false;
        });
      } else{ controls.hide(); }
    });
  },
  ItemPreviewA : function(){},
  FeaturePreviewA : function(){}
};

//Anon Fire!
(function($){
  $(function(){
    HPB.Events.BeforeStart(function(){

      HPB.Events.StickyHeader();
      HPB.Events.SliderPreviewA([$('.box-a')]);
      HPB.Events.SliderPreviewA($('.box-e'));
      $(".main-nav-top a").not('.nodblclick').click(function(e){
        $(".submenu-list").slideUp(200);
        HPB.Events.MenuSlider(e,$(this)); }).dblclick(function(e){ window.location.href=$(this).attr("href"); return true; });

      $(".split-box .item-container-b").find("img").click(function(e){
        var me = $(this),
            idx = me.parents('span').index(),
            data = HPB.Models.CompleteList(),
            details = $(".split-box .item-details-b"),
            merchant = details.find('.bazaar-name a'),
            price = details.find('.price'),
            descrip = details.find('.item-detail p').length > 0 ? details.find('.item-detail p') : details.find('.box-description p'),
            link = details.find('.get-item'),
            zoom = details.find('.zoom-item'),
            $limg = details.find('img'),
            src = me.attr('src'),
            sizes = me.siblings('input');
            img = src.split('/');
        $('.split-box .item-container-b').find('img').removeClass('current');
        me.addClass('current');
        //alert(sizes.length)
        if(sizes.length !== 0){
          details.find('.sizes').find('span').remove()
          sizes.each(function(){
            //alert($(this).attr('value'));
            details.find('.sizes').append('<span>' + $(this).val() + '</span>');
          })

        } else {
          details.find('div.sizes').html('<strong>Sizes: </strong><span>Out of Stock</span>');
        }

        merchant.attr('href','' + data[idx].link).text(data[idx].name);
        price.html("<a>"+ ( (data[idx].price).toString().indexOf('P') > -1 ? data[idx].price : 'P '+ data[idx].price ) + "</a>");
        descrip.text(data[idx].descrip);
        link.attr("href",HPB.Globals.WebRoot+'bazaars/profile/'+data[idx].link+'/'+data[idx].itemId);
        $limg.attr('src', HPB.Globals.WebRoot+'img/uploads/images/thumb/large/'+img[7])
        zoom.attr('href', HPB.Globals.WebRoot+'img/uploads/images/thumb/large/'+img[7]);
        e.preventDefault();
        return false;
      });



      $("a.new-arrivals").click(function(e){
        var me = $(this),
            $top = null,
            $body = $("html, body"),
            newArrivalsBox = $("section.new-arrivals");

        if(newArrivalsBox.length > 0){

          e.preventDefault();
          $top = (newArrivalsBox.offset()).top - 39;
          console.log($top);
          $body.animate({ scrollTop: $top },300)
          return false;
        } else {
          return true;
        }
      });

      $(".to-top").click(function(e){ $("html,body").animate({ scrollTop: 0 },200); });

      $(".nav-container").mouseleave(function(){ $(".submenu-list").slideUp(); });

      $(".forms-normal").submit(function(e){
        return HPB.Events.SomeValidation($(this));
      });

      $('.item-slider-container').find('img:first-child').addClass('current');

      $('.item-slider-container').find('img').click(function(e){
        // alert('item clicked');
        var me = $(this),
            idx = $(this).parent().index(),
            data = HPB.Models.NewArrivals(),
            details = me.parents('.combo-box').find('.item-details'),
            merchant = details.find('.bazaar-name a'),
            price = details.find('.price'),
            descrip = details.find('.item-detail p'),
            link = details.find('.get-item');

        $('.item-slider-container').find('img').removeClass('current');
        me.addClass('current');
        merchant.attr('href',HPB.Globals.WebRoot +'bazaars/profile/' + data[idx].link).text(data[idx].name);
        price.text((data[idx].price).toString().indexOf('P') > -1 ? data[idx].price : 'P '+data[idx].price);
        descrip.text(data[idx].descrip);
        link.attr('href',HPB.Globals.WebRoot+"bazaars/profile/" + data[idx].link + "/" + data[idx].itemId);
        e.preventDefault();
        return false;
      }).dblclick(function(){
        var idx = $(this).parent().index(),
            data = HPB.Models.NewArrivals(),
            details = $(this).parents('.combo-box').find('.item-details'),
            link = HPB.Globals.WebRoot + "bazaars/profile/" + data[idx].link + "/" + data[idx].itemId;

            // console.log(link);
        window.location = HPB.Globals.LoggedIn ? link : HPB.Globals.WebRoot + 'login';
      });

      $('.on-sale .prod-list ul').find('li').click(function(e){
        var me = $(this),
            tag = $(this).find("a"),
            idx = $(this).index(),
            data = HPB.Models.OnSale(),
            details = me.parents(".combo-box").find(".prod-box"),
            pricelink = details.find('h1 a'),
            descrip = details.find('h2');
        $('.on-sale .prod-list a').removeClass('current');
        tag.addClass('current');
        pricelink.text((data[idx].price).toString().indexOf('P') > -1 ? data[idx].price : 'P '+data[idx].price+" on SALE @ HPB!" );
        details.attr('style','background-image:url('+data[idx].bgphoto+');')
        pricelink.attr('href',data[idx].link);
        descrip.text(data[idx].descrip);
        e.preventDefault();
        return false;
      });

      $('.featured-brands .prod-list ul').find('li').click(function(e){
        var me = $(this),
            tag = $(this).find("a"),
            idx = $(this).index(),
            data = HPB.Models.FeaturedBrands(),
            details = me.parents(".combo-box").find(".prod-box"),
            pricelink = details.find('h1 a'),
            descrip = details.find('h2');
        $('.featured-brands .prod-list a').removeClass('current');
        tag.addClass('current');
        pricelink.text("P "+data[idx].price+" Only @ HPB!");
        details.attr('style','background-image:url('+data[idx].bgphoto+');')
        pricelink.attr('href',data[idx].link);
        descrip.text(data[idx].descrip);
        e.preventDefault();
        return false;
      });

      $('.combo-box.whats-hot, .combo-box.brands').find('img').hover(function(e){
        var me = $(this),
            button = me.parent().find(".hover-button").outerHeight(),
            tmpl = HPB.Helpers.HoverDetailsTemplate({
              itemName : me.data('name') ? me.data('name') : me.attr('data-name'),
              merchantName : me.data('link') ? me.data('link') : me.attr('data-link'),
              itemDescrip : me.data('description') ? me.data('description') : me.attr('data-description'),
              itemPrice : me.data('price') ? me.data('price') : me.attr('data-description')
            });
        // console.log(me.parent());
        me.parent().append(tmpl);

        // console.log(button);
        me.parent().find(".button-hider").stop().animate({"height":button+"px"},50);
      },function(){
        $(this).parent().find(".hover-tmpl").remove();
      });
      $('.img-box').mouseleave(function(){ $(this).find(".button-hider").stop().animate({"height":0+"px"},50); })

      var curr = $('.current').attr('src'),
          scur,
          img = null;

      if(typeof(curr) != 'undefined'){
        scur = curr.split('/');
        img = HPB.Globals.WebRoot + 'img/uploads/images/thumb/large/' + scur[7];
        $('a.zoom-item').attr('href', img)
      }

			$('a.zoom-item').fancybox({
        animationEffect: "zoom",
        animationDuration: 1000

				// 'transitionIn'	:	'elastic',
				// 'transitionOut'	:	'elastic',
				// 'speedIn'		:	600,
				// 'speedOut'		:	200,
        // image : {
        //   preload : true
        // }

				// 'overlayShow'	:	false,
        // modal : true

			});

      $('a#forgot-link').fancybox({
        'transitionIn'  : 'elastic',
        'transitionOut' : 'elastic',
        'speedIn'   : 600,
        'speedOut'    : 200,
        'overlayShow' : false,
        'closeBtn' : false
      });

    });
  });
})(jQuery);
