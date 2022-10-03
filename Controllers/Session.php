<?php

class Session
{
    // can call getCurrentSession() on every page - it will do the process for you
     public function getCurrentSession()
     {
         $currentFrontendSessionID = $_COOKIE['frontend_session'] ?? null;
         if (!$currentFrontendSessionID)
         {
            return $this->initiateSession();
         }
         $foundSession = null;
         $handle = fopen("sessions.txt", "r");
         if ($handle)
         {
             while (($line = fgets($handle)) !== false) {
                 if ($line === $currentFrontendSessionID)
                 {
                     $foundSession = $currentFrontendSessionID;
                     break;
                 }
             }
             fclose($handle);
         }
         if (!$foundSession)
         {
             $foundSession = $this->initiateSession();
         }
         return $foundSession;
     }

    public function sessionId(): string
    {
        return session_id();
    }

     public function persistSessionID($sessionId)
     {
         $file = fopen('sessions.txt', 'w');
         fwrite($file, $sessionId . '\n');
         fclose($file);
     }

     public function initiateSession(): string
     {
         session_start();
         $sessionId = $this->sessionId();
         $this->persistSessionID($sessionId);
         setcookie('frontend_session', $sessionId);
         return $sessionId;
     }
}
