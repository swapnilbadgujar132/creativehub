@extends('layouts.app')

@section('title', 'Dashboard | CreativeHub')

@section('content')
<div style="max-width: 896px; margin: 0 auto; padding: 16px; padding-top: 24px;">
    <!-- Welcome Card -->
    <div style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; padding: 24px 16px; border-radius: 8px; margin-bottom: 24px;">
        <h2 style="font-size: 24px; font-weight: bold; margin: 0 0 8px 0;">Welcome, Sarah! 👋</h2>
        <p style="font-size: 14px; opacity: 0.9; margin: 0;">You have 23 new notifications</p>
    </div>

    <!-- Stats -->
    <h2 style="font-size: 18px; font-weight: bold; margin: 24px 0 16px 0;">Your Performance</h2>
    <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 12px; margin-bottom: 24px;">
        <div style="background: white; padding: 16px; border: 1px solid #e5e7eb; border-radius: 8px; text-align: center;">
            <div style="font-size: 24px; font-weight: bold; color: #667eea; margin: 0 0 4px 0;">18</div>
            <p style="font-size: 12px; color: #6b7280; margin: 0;">Projects</p>
        </div>
        <div style="background: white; padding: 16px; border: 1px solid #e5e7eb; border-radius: 8px; text-align: center;">
            <div style="font-size: 24px; font-weight: bold; color: #667eea; margin: 0 0 4px 0;">1.2K</div>
            <p style="font-size: 12px; color: #6b7280; margin: 0;">Followers</p>
        </div>
        <div style="background: white; padding: 16px; border: 1px solid #e5e7eb; border-radius: 8px; text-align: center;">
            <div style="font-size: 24px; font-weight: bold; color: #667eea; margin: 0 0 4px 0;">8.5K</div>
            <p style="font-size: 12px; color: #6b7280; margin: 0;">Views</p>
        </div>
    </div>

    <!-- Trending Projects -->
    <h2 style="font-size: 18px; font-weight: bold; margin: 24px 0 16px 0;">📈 Trending Now</h2>
    <div style="display: grid; gap: 12px; margin-bottom: 24px;">
        <div style="background: white; border: 1px solid #e5e7eb; border-radius: 8px; overflow: hidden;">
            <div style="width: 100%; height: 100px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);"></div>
            <div style="padding: 12px;">
                <h3 style="margin: 0; font-weight: 600; font-size: 14px;">Mobile App UI Kit</h3>
                <p style="margin: 4px 0 0 0; font-size: 12px; color: #6b7280;">By Alex Chen • 234 ❤️</p>
            </div>
        </div>
        <div style="background: white; border: 1px solid #e5e7eb; border-radius: 8px; overflow: hidden;">
            <div style="width: 100%; height: 100px; background: linear-gradient(135deg, #764ba2 0%, #667eea 100%);"></div>
            <div style="padding: 12px;">
                <h3 style="margin: 0; font-weight: 600; font-size: 14px;">Web Dashboard Design</h3>
                <p style="margin: 4px 0 0 0; font-size: 12px; color: #6b7280;">By Maria Garcia • 189 ❤️</p>
            </div>
        </div>
    </div>

    <!-- Recent Activity -->
    <h2 style="font-size: 18px; font-weight: bold; margin: 24px 0 16px 0;">🔔 Recent Activity</h2>
    <div style="background: white; border: 1px solid #e5e7eb; border-radius: 8px; padding: 16px;">
        <div style="border-bottom: 1px solid #e5e7eb; padding-bottom: 12px; margin-bottom: 12px;">
            <p style="margin: 0; font-size: 14px;"><strong>John Smith</strong> liked your project</p>
            <p style="margin: 4px 0 0 0; font-size: 12px; color: #6b7280;">2 hours ago</p>
        </div>
        <div style="border-bottom: 1px solid #e5e7eb; padding-bottom: 12px; margin-bottom: 12px;">
            <p style="margin: 0; font-size: 14px;"><strong>Emma Wilson</strong> started following you</p>
            <p style="margin: 4px 0 0 0; font-size: 12px; color: #6b7280;">5 hours ago</p>
        </div>
        <div>
            <p style="margin: 0; font-size: 14px;"><strong>Mike Johnson</strong> commented on your work</p>
            <p style="margin: 4px 0 0 0; font-size: 12px; color: #6b7280;">1 day ago</p>
        </div>
    </div>
</div>
@endsection
