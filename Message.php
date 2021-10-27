<?php

class AddedComment implements SplSubject
{
    /**
     * Array of the observers
     *
     * @var array
     */
    protected $observers = [];
    /**
     * The comment text that was just added for our pretend blog comment
     * @var string
     */
    public $text_message;
    /**
     * The ID for the blog post that this just added blog comment relates to
     * @var int
     */
    public $user_id;
    /**
     * Comment constructor - save the $comment_text (for the recently submitted comment) and the $user_id that this blog comment relates to.
     * @param $comment_text
     * @param $user_id
     */
    public function __construct($text_message, $user_id)
    {
        $this->text_message = $comment_text;
        $this->user_id = $user_id;
    }
    /**
     * Add an observer (such as EmailAuthor, EmailOtherCommentators or IncrementCommentCount) to $this->observers so we can cycle through them later
     * @param SplObserver $observer
     * @return AddedComment
     */
    public function attach(SplObserver $observer)
    {
        $key = spl_object_hash($observer);
        $this->observers[$key] = $observer;
        return $this;
    }
    /**
     * Remove an observer from $this->observers
     * @param SplObserver $observer
     */
    public function detach(SplObserver $observer)
    {
        $key = spl_object_hash($observer);
        unset($this->observers[$key]);
    }
    /**
     * Go through all of the $this->observers and fire the ->update() method.
     *
     * (In Laravel and other frameworks this would often be called the ->handle() method.)
     *
     * @return mixed
     */
    public function notify()
    {
        /** @var SplObserver $observer */
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }
}
