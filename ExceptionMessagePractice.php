<?php
// Exception:getMessage() Example
Try {
    throw new Exception("Error occurred");
    } catch(Exception $e) {
        echo $e->getMessage();
    }
