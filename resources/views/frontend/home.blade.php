@extends('frontend.layouts.app')

@section('title', 'Witness Foundation — Peace Begins With Me')

@section('content')
    {{-- Hero --}}
    @include('frontend.sections.hero')

    {{-- Statement --}}
    @include('frontend.sections.statement')

    {{-- Programmes --}}
    @include('frontend.sections.services')

    {{-- Approach preview → /approach --}}
    @include('frontend.sections.approach')

    {{-- Field gallery --}}
    @include('frontend.sections.field-gallery')

    {{-- Ongoing projects preview → /projects --}}
    @include('frontend.sections.projects')

    {{-- Stories preview → /impact --}}
    @include('frontend.sections.stories')

    {{-- Impact numbers preview → /impact --}}
    @include('frontend.sections.impact')

    {{-- About preview → /about --}}
    @include('frontend.sections.about')

    {{-- News & Events (Full Section) --}}
    @include('frontend.sections.news-events')

    {{-- Shop preview → /shop --}}
    @include('frontend.sections.shop-preview')

    {{-- Support calculator → /donate --}}
    @include('frontend.sections.support-calculator')

    {{-- Gallery --}}
    @include('frontend.sections.gallery-carousel')

    {{-- Closing CTA → /donate --}}
    @include('frontend.sections.closing-cta')
@endsection
