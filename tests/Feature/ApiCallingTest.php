<?php

it('can limit 60 requests per minute', function () {
   $iteration = 1000;
   $success = 0;
   for ($i = 0; $i < $iteration; $i++) {
       $response = $this->call('GET', '/api');
       if ($response->status() === 200) {
           $success++;
       }
   }
   $expected = 60;
   expect($success)->toBeLessThanOrEqual($expected);
});
