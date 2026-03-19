@extends('layouts.app')

@section('title', 'Profile | CreativeHub')

@section('content')
<div style="max-width: 896px; margin: 0 auto; padding: 16px; padding-top: 24px;">
    <!-- Profile Header -->
    <div style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; padding: 32px 16px; text-align: center; border-radius: 8px; margin-bottom: 24px;">
        <div style="width: 80px; height: 80px; background: white; border-radius: 50%; margin: 0 auto 16px; display: flex; align-items: center; justify-content: center; font-size: 40px; color: #667eea;">👩‍🎨</div>
        <h2 style="font-size: 24px; font-weight: bold; margin: 0;;">Sarah Anderson</h2>
        <p style="font-size: 14px; opacity: 0.9; margin: 8px 0 0 0;">@sarahdesigner • UI/UX Designer</p>
    </div>

    <!-- Stats Grid -->
    <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 12px; margin-bottom: 24px;">
        <div style="background: white; padding: 16px; border: 1px solid #e5e7eb; border-radius: 8px; text-align: center;">
            <div style="font-size: 20px; font-weight: bold; color: #667eea; margin: 0 0 4px 0;">18</div>
            <p style="font-size: 12px; color: #6b7280; margin: 0;">Projects</p>
        </div>
        <div style="background: white; padding: 16px; border: 1px solid #e5e7eb; border-radius: 8px; text-align: center;">
            <div style="font-size: 20px; font-weight: bold; color: #667eea; margin: 0 0 4px 0;">1.2K</div>
            <p style="font-size: 12px; color: #6b7280; margin: 0;">Followers</p>
        </div>
        <div style="background: white; padding: 16px; border: 1px solid #e5e7eb; border-radius: 8px; text-align: center;">
            <div style="font-size: 20px; font-weight: bold; color: #667eea; margin: 0 0 4px 0;">340</div>
            <p style="font-size: 12px; color: #6b7280; margin: 0;">Following</p>
        </div>
    </div>

    <!-- Bio -->
    <div style="background: white; border: 1px solid #e5e7eb; border-radius: 8px; padding: 16px; margin-bottom: 24px;">
        <h3 style="font-size: 14px; font-weight: 600; margin: 0 0 12px 0;">👋 About Me</h3>
        <p style="font-size: 14px; color: #6b7280; margin: 0;">Passionate UI/UX Designer | Creative Problem Solver | 5+ years experience in digital design. Love crafting beautiful and functional interfaces. 🎨</p>
        <div style="display: flex; gap: 8px; margin-top: 12px;">
            <span style="font-size: 12px; background: #f3f4f6; padding: 4px 8px; border-radius: 4px;">Design</span>
            <span style="font-size: 12px; background: #f3f4f6; padding: 4px 8px; border-radius: 4px;">UX</span>
            <span style="font-size: 12px; background: #f3f4f6; padding: 4px 8px; border-radius: 4px;">Figma</span>
        </div>
    </div>

    <!-- My Projects -->
    <h2 style="font-size: 18px; font-weight: bold; margin: 24px 0 16px 0;">📁 My Projects</h2>
    <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 12px; margin-bottom: 24px;">
        <div style="background: white; border: 1px solid #e5e7eb; border-radius: 8px; overflow: hidden;">
            <div style="width: 100%; height: 100px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);"></div>
            <div style="padding: 12px;">
                <h3 style="font-size: 14px; font-weight: 600; margin: 0;">E-commerce UI</h3>
                <p style="font-size: 12px; color: #6b7280; margin: 4px 0 0 0;">542 ❤️</p>
            </div>
        </div>
        <div style="background: white; border: 1px solid #e5e7eb; border-radius: 8px; overflow: hidden;">
            <div style="width: 100%; height: 100px; background: linear-gradient(135deg, #764ba2 0%, #667eea 100%);"></div>
            <div style="padding: 12px;">
                <h3 style="font-size: 14px; font-weight: 600; margin: 0;">Social App Design</h3>
                <p style="font-size: 12px; color: #6b7280; margin: 4px 0 0 0;">389 ❤️</p>
            </div>
        </div>
        <div style="background: white; border: 1px solid #e5e7eb; border-radius: 8px; overflow: hidden;">
            <div style="width: 100%; height: 100px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);"></div>
            <div style="padding: 12px;">
                <h3 style="font-size: 14px; font-weight: 600; margin: 0;">Dashboard Design</h3>
                <p style="font-size: 12px; color: #6b7280; margin: 4px 0 0 0;">276 ❤️</p>
            </div>
        </div>
        <div style="background: white; border: 1px solid #e5e7eb; border-radius: 8px; overflow: hidden;">
            <div style="width: 100%; height: 100px; background: linear-gradient(135deg, #764ba2 0%, #667eea 100%);"></div>
            <div style="padding: 12px;">
                <h3 style="font-size: 14px; font-weight: 600; margin: 0;">Mobile Banking App</h3>
                <p style="font-size: 12px; color: #6b7280; margin: 4px 0 0 0;">203 ❤️</p>
            </div>
        </div>
    </div>

    <!-- Actions -->
    <div style="display: flex; gap: 12px;">
        <a href="#" style="flex: 1; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; padding: 12px; border-radius: 8px; text-decoration: none; text-align: center; font-weight: 600; border: none; cursor: pointer;">Edit Profile</a>
        <a href="#" style="flex: 1; border: 2px solid #667eea; color: #667eea; padding: 12px; border-radius: 8px; text-decoration: none; text-align: center; font-weight: 600; background: white; cursor: pointer;">Logout</a>
    </div>
</div>
@endsection
