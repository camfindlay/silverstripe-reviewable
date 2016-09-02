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

        
}