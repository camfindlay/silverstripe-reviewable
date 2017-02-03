<?php
namespace Reviewable;
use \Reviewable;
class ControllerExtension extends \DataExtension {

    private static $review_message = "Thanks for your review.";

    private static $allowed_actions = array(
        'ReviewForm'
    );

    public function ReviewForm(){

        $fields = \FieldList::create(
            \TextareaField::create('Content'),
            \Reviewable\RatingField::create('Rating')
        );
        
        $actions = \FieldList::create(
            \FormAction::create('processReview')
        );

        return \Form::create($this->owner,'ReviewForm',$fields,$actions);

    }

    public function processReview($data, \Form $form){

        $review = Review::create();
        $review->ObjectID = $this->owner->ID;
        $review->ObjectClass = $this->owner->ClassName;
        $review->Content = $data['Content'];
        $review->Rating = $data['score'];
        $review->write();
        $form->sessionMessage($this->owner->config()->get('review_message'),'good');
        $this->owner->redirectBack();

    }
    
    public function averageRating() {
    
        if($rating = \Reviewable\Review::get()->filter('ObjectID', $this->owner->ID)){

            $countRating = $rating->Count();
            $ratingTotal = 0;

            foreach($rating as $review) {

                $ratingTotal += $review->Rating;
            
            }

            if(round($ratingTotal / $countRating) == 0) {
                return '<img src="/reviewable/images/star-off.png" alt="1" title="bad"> <img src="/reviewable/images/star-off.png" alt="2" title="poor"> <img src="/reviewable/images/star-off.png" alt="3" title="regular"> <img src="/reviewable/images/star-off.png" alt="4" title="good"> <img src="/reviewable/images/star-off.png" alt="5" title="gorgeous">';
            }elseif(round($ratingTotal / $countRating) == 1){
                return '<img src="/reviewable/images/star-on.png" alt="1" title="bad"> <img src="/reviewable/images/star-off.png" alt="2" title="poor"> <img src="/reviewable/images/star-off.png" alt="3" title="regular"> <img src="/reviewable/images/star-off.png" alt="4" title="good"> <img src="/reviewable/images/star-off.png" alt="5" title="gorgeous">';
            }elseif(round($ratingTotal / $countRating) == 2){
                return '<img src="/reviewable/images/star-on.png" alt="1" title="bad"> <img src="/reviewable/images/star-on.png" alt="2" title="poor"> <img src="/reviewable/images/star-off.png" alt="3" title="regular"> <img src="/reviewable/images/star-off.png" alt="4" title="good"> <img src="/reviewable/images/star-off.png" alt="5" title="gorgeous">';
            }elseif(round($ratingTotal / $countRating) == 3){
                return '<img src="/reviewable/images/star-on.png" alt="1" title="bad"> <img src="/reviewable/images/star-on.png" alt="2" title="poor"> <img src="/reviewable/images/star-on.png" alt="3" title="regular"> <img src="/reviewable/images/star-off.png" alt="4" title="good"> <img src="/reviewable/images/star-off.png" alt="5" title="gorgeous">';
            }elseif(round($ratingTotal / $countRating) == 4){
                return '<img src="/reviewable/images/star-on.png" alt="1" title="bad"> <img src="/reviewable/images/star-on.png" alt="2" title="poor"> <img src="/reviewable/images/star-on.png" alt="3" title="regular"> <img src="/reviewable/images/star-on.png" alt="4" title="good"> <img src="/reviewable/images/star-off.png" alt="5" title="gorgeous">';
            }elseif(round($ratingTotal / $countRating) == 5){
                return '<img src="/reviewable/images/star-on.png" alt="1" title="bad"> <img src="/reviewable/images/star-on.png" alt="2" title="poor"> <img src="/reviewable/images/star-on.png" alt="3" title="regular"> <img src="/reviewable/images/star-on.png" alt="4" title="good"> <img src="/reviewable/images/star-on.png" alt="5" title="gorgeous">';
            }
            
        }

        return '<img src="/reviewable/images/star-off.png" alt="1" title="bad"> <img src="/reviewable/images/star-off.png" alt="2" title="poor"> <img src="/reviewable/images/star-off.png" alt="3" title="regular"> <img src="/reviewable/images/star-off.png" alt="4" title="good"> <img src="/reviewable/images/star-off.png" alt="5" title="gorgeous">';

    }

    public function averageRating() {
    
        if($reviews = \Reviewable\Review::get()->filter('ObjectID', $this->owner->ID)){

            $countRating = $reviews->Count();
            $reviewsTotal = 0;

            foreach($reviews as $review) {

                $reviewsTotal += $review->Rating;
            
            }

            return round($reviewsTotal / $countRating);
            
        }else {

            return 0;

        }

    }
        
}
