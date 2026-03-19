@extends('layouts.app')

@section('title', 'Search | CreativeHub')

@section('content')
<div style="max-width: 896px; margin: 0 auto; padding: 16px; padding-top: 24px;">
    <!-- Search Input -->
    <div style="margin-bottom: 24px;">
        <input type="text" placeholder="🔍 Search projects, designers..." style="width: 100%; padding: 12px 16px; border: 2px solid #e5e7eb; border-radius: 8px; font-size: 14px; outline: none;" />
    </div>

    <!-- Filter Tags -->
    <div style="display: flex; gap: 8px; margin-bottom: 24px; overflow-x: auto; padding-bottom: 12px;">
        <button style="padding: 8px 16px; background: #667eea; color: white; border: none; border-radius: 20px; font-size: 12px; cursor: pointer; white-space: nowrap; font-weight: 600;">All</button>
        <button style="padding: 8px 16px; background: white; color: #667eea; border: 2px solid #667eea; border-radius: 20px; font-size: 12px; cursor: pointer; white-space: nowrap;">🔥 Trending</button>
        <button style="padding: 8px 16px; background: white; color: #6b7280; border: 2px solid #e5e7eb; border-radius: 20px; font-size: 12px; cursor: pointer; white-space: nowrap;">✨ New</button>
        <button style="padding: 8px 16px; background: white; color: #6b7280; border: 2px solid #e5e7eb; border-radius: 20px; font-size: 12px; cursor: pointer; white-space: nowrap;">⭐ Popular</button>
    </div>

    <!-- Search Results -->
    <h2 style="font-size: 16px; font-weight: bold; margin: 24px 0 16px 0;">Best Matches (45 results)</h2>
    <div style="display: grid; gap: 12px;">
        <div style="background: white; border: 1px solid #e5e7eb; border-radius: 8px; padding: 16px;">
            <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 8px;">
                <div style="width: 50px; height: 50px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border-radius: 8px;"></div>
                <div style="flex: 1;">
                    <h3 style="font-size: 14px; font-weight: 600; margin: 0;">Mobile App UI Kit 2024</h3>
                    <p style="font-size: 12px; color: #6b7280; margin: 4px 0 0 0;">By Alex Chen • Design Kit</p>
                </div>
                <span style="font-size: 20px; cursor: pointer;">❤️</span>
            </div>
            <p style="font-size: 12px; color: #6b7280; margin: 0;">Modern UI components for mobile apps with 50+ pre-built screens...</p>
        </div>

        <div style="background: white; border: 1px solid #e5e7eb; border-radius: 8px; padding: 16px;">
            <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 8px;">
                <div style="width: 50px; height: 50px; background: linear-gradient(135deg, #764ba2 0%, #667eea 100%); border-radius: 8px;"></div>
                <div style="flex: 1;">
                    <h3 style="font-size: 14px; font-weight: 600; margin: 0;">SaaS Dashboard Template</h3>
                    <p style="font-size: 12px; color: #6b7280; margin: 4px 0 0 0;">By Maria Garcia • Web Design</p>
                </div>
                <span style="font-size: 20px; cursor: pointer;">🤍</span>
            </div>
            <p style="font-size: 12px; color: #6b7280; margin: 0;">Professional dashboard design with charts, analytics and admin controls...</p>
        </div>

        <div style="background: white; border: 1px solid #e5e7eb; border-radius: 8px; padding: 16px;">
            <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 8px;">
                <div style="width: 50px; height: 50px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border-radius: 8px;"></div>
                <div style="flex: 1;">
                    <h3 style="font-size: 14px; font-weight: 600; margin: 0;">E-commerce Store Design</h3>
                    <p style="font-size: 12px; color: #6b7280; margin: 4px 0 0 0;">By Mike Johnson • E-commerce</p>
                </div>
                <span style="font-size: 20px; cursor: pointer;">❤️</span>
            </div>
            <p style="font-size: 12px; color: #6b7280; margin: 0;">Complete e-commerce UI with product pages, cart and checkout flow...</p>
        </div>

        <div style="background: white; border: 1px solid #e5e7eb; border-radius: 8px; padding: 16px;">
            <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 8px;">
                <div style="width: 50px; height: 50px; background: linear-gradient(135deg, #764ba2 0%, #667eea 100%); border-radius: 8px;"></div>
                <div style="flex: 1;">
                    <h3 style="font-size: 14px; font-weight: 600; margin: 0;">Social Media App Design</h3>
                    <p style="font-size: 12px; color: #6b7280; margin: 4px 0 0 0;">By Emma Wilson • Mobile App</p>
                </div>
                <span style="font-size: 20px; cursor: pointer;">🤍</span>
            </div>
            <p style="font-size: 12px; color: #6b7280; margin: 0;">Full social app interface with feed, profiles and messaging features...</p>
        </div>
    </div>

    <!-- Load More -->
    <div style="text-align: center; margin-top: 24px;">
        <button style="padding: 12px 24px; background: white; color: #667eea; border: 2px solid #667eea; border-radius: 8px; font-weight: 600; cursor: pointer; font-size: 14px;">Load 10 More</button>
    </div>
</div>
@endsection
