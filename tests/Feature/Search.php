<?php

test('Search functionality works correctly', function () {
    $response = $this->get('/laptopInventory');

    $response->assertStatus(200);
});
