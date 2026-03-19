@extends('layouts.app')

@section('title', 'Welcome | CreativeHub')

@section('content')
<div style="max-width: 896px; margin: 0 auto; padding: 16px; padding-top: 24px;">
    <!-- Hero Section -->
    <div style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; padding: 48px 16px; text-align: center; border-radius: 8px; margin-bottom: 24px;">
        <h1 style="font-size: 32px; font-weight: bold; margin: 0 0 12px 0;">Welcome to CreativeHub</h1>
        <p style="font-size: 16px; opacity: 0.95; margin: 0;">Build, explore, and share amazing projects</p>
    </div>

    <!-- Features Section -->
    <h2 style="font-size: 22px; font-weight: bold; margin: 24px 0 16px 0;">Why CreativeHub?</h2>
    <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 12px; margin-bottom: 24px;">
        <div style="background: white; padding: 16px; border: 1px solid #e5e7eb; border-radius: 8px; text-align: center;">
            <div style="font-size: 32px; margin-bottom: 8px;">🚀</div>
            <h3 style="font-weight: 600; margin: 0 0 4px 0; font-size: 14px;">Share Fast</h3>
            <p style="font-size: 12px; color: #6b7280; margin: 0;">Publish in seconds</p>
        </div>
        <div style="background: white; padding: 16px; border: 1px solid #e5e7eb; border-radius: 8px; text-align: center;">
            <div style="font-size: 32px; margin-bottom: 8px;">🌟</div>
            <h3 style="font-weight: 600; margin: 0 0 4px 0; font-size: 14px;">Get Discovered</h3>
            <p style="font-size: 12px; color: #6b7280; margin: 0;">Build your audience</p>
        </div>
        <div style="background: white; padding: 16px; border: 1px solid #e5e7eb; border-radius: 8px; text-align: center;">
            <div style="font-size: 32px; margin-bottom: 8px;">💼</div>
            <h3 style="font-weight: 600; margin: 0 0 4px 0; font-size: 14px;">Showcase Work</h3>
            <p style="font-size: 12px; color: #6b7280; margin: 0;">Impress clients</p>
        </div>
    </div>

    <!-- Stats Section -->
    <div style="background: white; border: 1px solid #e5e7eb; border-radius: 8px; padding: 24px; display: grid; grid-template-columns: repeat(3, 1fr); gap: 16px; text-align: center; margin-bottom: 24px;">
        <div><div style="font-size: 24px; font-weight: bold; color: #667eea; margin: 0 0 4px 0;">50K+</div><p style="font-size: 12px; color: #6b7280; margin: 0;">Users</p></div>
        <div><div style="font-size: 24px; font-weight: bold; color: #667eea; margin: 0 0 4px 0;">10K+</div><p style="font-size: 12px; color: #6b7280; margin: 0;">Projects</p></div>
        <div><div style="font-size: 24px; font-weight: bold; color: #667eea; margin: 0 0 4px 0;">99.9%</div><p style="font-size: 12px; color: #6b7280; margin: 0;">Uptime</p></div>
    </div>

    <!-- CTA Buttons -->
    <div style="display: flex; flex-direction: column; gap: 12px; margin-bottom: 24px;">
        <a href="/register" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; padding: 12px 24px; border-radius: 8px; text-decoration: none; text-align: center; font-weight: 600; border: none; cursor: pointer;">Get Started Free</a>
        <a href="/login" style="border: 2px solid #667eea; color: #667eea; padding: 12px 24px; border-radius: 8px; text-decoration: none; text-align: center; font-weight: 600; background: white; cursor: pointer;">Sign In</a>
    </div>
</div>
@endsection
