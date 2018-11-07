/**
 * Loads in a URL into a specified divName, and applies the function to
 * all the links inside the pagination div of that page (to preserve the ajax-request)
 * @param string href The URL of the page to load
 * @param string divName The name of the DOM-element to load the data into
 * @return boolean False To prevent the links from doing anything on their own.
 */

var root = $('#MerchantThemeId').attr('data-root'),
    $style = $('link.theme');
    
    $('#MerchantThemeId').change(function(){
      $style.attr('href', root + 'css/' + $(this).find('option:selected').attr('data-theme') + '.css');
    });
