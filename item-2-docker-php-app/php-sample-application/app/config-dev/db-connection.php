<?php

return new PDO("mysql:host=bd;dbname=sample", "sampleuser", "samplepass", [PDO::ATTR_PERSISTENT => true]);
