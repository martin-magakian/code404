$(function () {

    function initMap() {

        var location = new google.maps.LatLng(45.7257085,4.8310724,16); /*45.7257085,4.8310724,16*/

        var mapCanvas = document.getElementById('map');
        var mapOptions = {
            center: location,
            zoom: 16,
            panControl: false,
            scrollwheel: false,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(mapCanvas, mapOptions);

        var Log404 = '/script/code404.svg';

        var marker = new google.maps.Marker({
            position: location,
            map: map,
            icon: Log404
        });

        var contentString = '<div class="info-window">' +
                '<h3>Info Window Content</h3>' +
                '<div class="info-content">' +
                '<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>' +
                '</div>' +
                '</div>';

        var infowindow = new google.maps.InfoWindow({
            content: contentString,
            maxWidth: 400
        });

        marker.addListener('click', function () {
            infowindow.open(map, marker);
        });

        var styles = [{"featureType": "landscape", "stylers": [{"saturation": 50}, 
        {"lightness": 65}, {"visibility": "on"}]}, {"featureType": "poi", "stylers": [{"saturation": -100}, {"lightness": 12}, 
        {"visibility": "simplified"}]}, {"featureType": "road.highway", "stylers": [{"saturation": -100}, {"visibility": "simplified"}]}, 
        {"featureType": "road.arterial", "stylers": [{"saturation": -100}, {"lightness": 30}, {"visibility": "on"}]}, 
        {"featureType": "road.local", "stylers": [{"saturation": -100}, {"lightness": 40}, {"visibility": "on"}]}, 
        {"featureType": "transit", "stylers": [{"saturation": -100}, {"visibility": "simplified"}]},
        {"featureType": "administrative.province", "stylers": [{"visibility": "off"}]}, 
        {"featureType": "water", "elementType": "labels", "stylers": [{"visibility": "on"}, {"lightness": -25}, {"saturation": -100}]}, 
        {"featureType": "water", "elementType": "geometry", "stylers": [{"hue": "#ffff00"}, {"lightness": -25}, {"saturation": -100}]}];

        map.set('styles', styles);


    }

    google.maps.event.addDomListener(window, 'load', initMap);
});

 $(function(){
        
            $(document.body).on('click', '.changeType' ,function(){
                $(this).closest('.phone-input').find('.type-text').text($(this).text());
                $(this).closest('.phone-input').find('.type-input').val($(this).data('type-value'));
            });
            
            $(document.body).on('click', '.btn-remove-phone' ,function(){
                $(this).closest('.phone-input').remove();
            });
            
            
            $('.btn-add-phone').click(function(){

                var index = $('.phone-input').length + 1;
                
                $('.phone-list').append(''+
                        '<div class="input-group phone-input">'+
                            '<span class="input-group-btn">'+
                                '<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="type-text">Type</span> <span class="caret"></span></button>'+
                                '<ul class="dropdown-menu" role="menu">'+
                                    '<li><a class="changeType" href="javascript:;" data-type-value="phone">Phone</a></li>'+
                                    '<li><a class="changeType" href="javascript:;" data-type-value="fax">Fax</a></li>'+
                                    '<li><a class="changeType" href="javascript:;" data-type-value="mobile">Mobile</a></li>'+
                                '</ul>'+
                            '</span>'+
                            '<input type="text" name="phone['+index+'][number]" class="form-control" placeholder="+1 (999) 999 9999" />'+
                            '<input type="hidden" name="phone['+index+'][type]" class="type-input" value="" />'+
                            '<span class="input-group-btn">'+
                                '<button class="btn btn-danger btn-remove-phone" type="button"><span class="glyphicon glyphicon-remove"></span></button>'+
                            '</span>'+
                        '</div>'
                );

            });
            
        });