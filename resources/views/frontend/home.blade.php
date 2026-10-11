@extends('frontend.layouts.app')

@section('title', 'Witness Foundation — Peace Begins With Me')

@section('content')
    {{-- Hero Section --}}
    @include('frontend.sections.hero')

    {{-- Scrolling Statement --}}
    @include('frontend.sections.statement')

    {{-- Programmes & Featured Services --}}
    @include('frontend.sections.services')

    {{-- Child & Community Support Feature --}}
    @include('frontend.sections.child-feature')

    {{-- Approach (5 Instruments) --}}
    @include('frontend.sections.approach')

    {{-- Field Interactive Gallery --}}
    @include('frontend.sections.field-gallery')

    {{-- Support Calculator & FAQ --}}
    @include('frontend.sections.support-calculator')

    {{-- Grounded Accountability Model (GAM) --}}
    @include('frontend.sections.gam')

    {{-- Field Stories --}}
    @include('frontend.sections.stories')

    {{-- Ongoing Projects --}}
    @include('frontend.sections.projects')

    {{-- What's Next (Exploring) --}}
    @include('frontend.sections.whats-next')

    {{-- Past Projects Timeline --}}
    @include('frontend.sections.timeline')

    {{-- News & Field Updates --}}
    @include('frontend.sections.news')

    {{-- Cumulative Impact Counters --}}
    @include('frontend.sections.impact')

    {{-- About Us & Governance --}}
    @include('frontend.sections.about')

    {{-- Marquee Photo Gallery --}}
    @include('frontend.sections.gallery-carousel')

    {{-- Closing CTA --}}
    @include('frontend.sections.closing-cta')
@endsection
