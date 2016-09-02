(function($){
    $(function(){

        var rateables = $('.rateable-ui');

        rateables.each(function(){
            var self = $(this);
            self.raty({
                readOnly 	: self.hasClass('disabled'),
                score 		: self.data('averagescore'),
                path 		: 'reviewable/images/'
            });

            self.find('img').not('.raty-cancel').click(function(){
                var img = $(this);
                var score = img.attr('alt');

                if(self.hasClass('disabled')){
                    alert("You have already rated this item");
                    return;
                }

            });

        });
    });
})(jQuery);