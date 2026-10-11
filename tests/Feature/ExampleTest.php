<?php

test('homepage returns a successful response and renders witness foundation', function () {
    $this->get(route('home'))
        ->assertOk()
        ->assertViewIs('frontend.home')
        ->assertSee('Witness Foundation')
        ->assertSee('Peace Begins With Me');
});

test('approach page returns a successful response', function () {
    $this->get(route('approach'))
        ->assertOk()
        ->assertViewIs('frontend.pages.approach')
        ->assertSee('One mission, five')
        ->assertSee('Participatory Media');
});

test('projects page returns a successful response', function () {
    $this->get(route('projects'))
        ->assertOk()
        ->assertViewIs('frontend.pages.projects')
        ->assertSee('National Migration Dialogue Series')
        ->assertSee('Government Committee Engagement');
});

test('impact page returns a successful response', function () {
    $this->get(route('impact'))
        ->assertOk()
        ->assertViewIs('frontend.pages.impact')
        ->assertSee('Sixteen years')
        ->assertSee('BDT 61+ Lakh Mediated');
});

test('about page returns a successful response', function () {
    $this->get(route('about'))
        ->assertOk()
        ->assertViewIs('frontend.pages.about')
        ->assertSee('Societies Registration Act 1860')
        ->assertSee('Dhaka Central Office');
});

test('donate page returns a successful response', function () {
    $this->get(route('donate'))
        ->assertOk()
        ->assertViewIs('frontend.pages.donate')
        ->assertSee('Official & Verified Contribution Channels')
        ->assertSee('BRAC Bank PLC');
});

test('contact page returns a successful response', function () {
    $this->get(route('contact'))
        ->assertOk()
        ->assertViewIs('frontend.pages.contact')
        ->assertSee('We welcome')
        ->assertSee('Send a Dispatch');
});
