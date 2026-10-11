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

test('about page returns a successful response', function () {
    $this->get(route('about'))
        ->assertOk()
        ->assertViewIs('frontend.pages.about')
        ->assertSee('Societies Registration Act 1860')
        ->assertSee('Headquarters')
        ->assertSee('News &amp; Events', false)
        ->assertSee('National Dialogue on Peace &amp; Digital Safety', false);
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
