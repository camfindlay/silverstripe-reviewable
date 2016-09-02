<?php
namespace Reviewable;

class Review extends \DataObject {

    private static $db = array(
        'Content' => 'Text',
        'Rating' => 'Int',
        'ObjectID' => 'Int',
        'ObjectClass' => 'Varchar',
        'SessionID' => 'Varchar(255)',
    );

    private static $has_one = array(
        'Member' => 'Member'
    );

    public function onBeforeWrite()
    {
        parent::onBeforeWrite();

        if (!session_id()) {
            Session::start();
        }

        $this->MemberID = \Member::currentUserID();
        $this->SessionID = session_id();
    }

}