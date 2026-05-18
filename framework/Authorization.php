<?php
        // // Authorization
        //     if(Session::get('user')['id'] !== $listing->user_id) {
        //         $_SESSION['error_message'] = 'You are not authorized to delete this listing';
        //         return redirect('/listings/' . $listing->id);
        //     }
    
    namespace Framework;

    use Framework\Session;

    class Authorization {
        /**
         * Check if logged in user owns a listing
         * 
         * @params int $resourceId
         * @return bool
         */

        public static function isOwner($resourceId) {
            $sessionUser = Session::get('user');

            if($sessionUser !== null && isset($sessionUser['id'])) {
                $sessionUserId = (int) $sessionUser['id'];
                return $sessionUserId === $resourceId;
            }
            return false;
        }
    }
?>