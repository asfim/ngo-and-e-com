<?php

test('homepage returns a successful response and renders witness foundation', function () {
    $this->get(route('home'))
        ->assertOk()
        ->assertViewIs('frontend.home')
        ->assertSee('Witness Foundation')
        ->assertSee('Peace Begins With Me')
        ->assertSee('News &amp; Events', false)
        ->assertSee('National Dialogue on Peace &amp; Digital Safety', false);
});

test('approach page returns a successful response', function () {
    $this->get(route('approach'))
        ->assertOk()
        ->assertViewIs('frontend.pages.approach')
        ->assertSee('One mission')
        ->assertSee('Film &amp; participatory media', false);
});

test('projects page returns a successful response', function () {
    $this->get(route('projects'))
        ->assertOk()
        ->assertViewIs('frontend.pages.projects')
        ->assertSee('National Migration Dialogue Series')
        ->assertSee('Browse our work');
});

test('impact page returns a successful response', function () {
    $this->get(route('impact'))
        ->assertOk()
        ->assertViewIs('frontend.pages.impact')
        ->assertSee('Sixteen years')
        ->assertSee('Where our effort goes');
});

test('about page returns a successful response and does not contain news and events', function () {
    $this->get(route('about'))
        ->assertOk()
        ->assertViewIs('frontend.pages.about')
        ->assertSee('Societies Registration Act 1860')
        ->assertSee('Headquarters')
        ->assertDontSee('Field Updates &amp; Calendar', false)
        ->assertDontSee('Voices of the Camps: Peace Media Film Festival', false);
});

test('donate page returns a successful response', function () {
    $this->get(route('donate'))
        ->assertOk()
        ->assertViewIs('frontend.pages.donate')
        ->assertSee('Make a gift')
        ->assertSee('BRAC Bank PLC');
});

test('contact page returns a successful response', function () {
    $this->get(route('contact'))
        ->assertOk()
        ->assertViewIs('frontend.pages.contact')
        ->assertSee('Send us a message')
        ->assertSee('Office hours');
});

test('blog page returns a successful response and renders articles', function () {
    $this->get(route('blog'))
        ->assertOk()
        ->assertViewIs('frontend.pages.blog')
        ->assertSee('Voices from the frontlines')
        ->assertSee('Documenting Hope')
        ->assertSee('Lessons from 100 Neighborhood Mediation Circles');
});

test('single blog post page returns a successful response', function () {
    $this->get(route('blog.show', 'documenting-hope-ukhiya'))
        ->assertOk()
        ->assertViewIs('frontend.pages.blog-detail')
        ->assertSee('Documenting Hope')
        ->assertSee('Fahmida Rahman');
});

test('shop page returns a successful response and lists fair-trade products', function () {
    $this->get(route('shop.index'))
        ->assertOk()
        ->assertViewIs('frontend.shop.index')
        ->assertSee('Flash Deals')
        ->assertSee('Handwoven Indigenous Pinon Waistcoat')
        ->assertSee('Eyes of the River');
});

test('product details page returns a successful response with artisan story', function () {
    $this->get(route('shop.show', 'handwoven-chakma-waistcoat'))
        ->assertOk()
        ->assertViewIs('frontend.shop.show')
        ->assertSee('Handwoven Indigenous Pinon Waistcoat')
        ->assertSee('Rangamati Women Weavers')
        ->assertSee('Buy Now');
});

test('checkout page returns a successful response and displays order calculation', function () {
    $this->get(route('shop.checkout', ['item' => 'handwoven-chakma-waistcoat', 'qty' => 2]))
        ->assertOk()
        ->assertViewIs('frontend.shop.checkout')
        ->assertSee('Shipping &amp; Delivery Details', false)
        ->assertSee('Cash on Delivery')
        ->assertSee('Place Fair-Trade Order', false);
});

test('processing checkout renders order confirmation successfully', function () {
    $this->post(route('shop.checkout.process'), [
        'name' => 'Fahim Rahman',
        'phone' => '01712345678',
        'address' => 'House 12, Road 4, Dhanmondi, Dhaka',
        'city' => 'Dhaka',
        'payment_method' => 'Cash on Delivery',
        'product_name' => 'Handwoven Indigenous Pinon Waistcoat',
        'qty' => 1,
        'total' => 1950,
    ])
        ->assertOk()
        ->assertViewIs('frontend.shop.success')
        ->assertSee('Thank you for your fair-trade order')
        ->assertSee('Fahim Rahman')
        ->assertSee('01712345678');
});


