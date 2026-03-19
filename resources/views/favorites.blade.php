@extends('layouts.app')

@section('title', 'Saved | CreativeHub')

@section('content')
<div style="max-width: 896px; margin: 0 auto; padding: 16px; padding-top: 24px;">
    <h1 style="font-size: 24px; font-weight: bold; margin: 0 0 24px 0;">💾 Saved Collections (12)</h1>

    <!-- Saved Items Grid -->
    <div style="display: grid; gap: 12px;">
        <div style="background: white; border: 1px solid #e5e7eb; border-radius: 8px; overflow: hidden;">
            <div style="width: 100%; height: 120px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);"></div>
            <div style="padding: 12px;">
                <div style="display: flex; align-items: flex-start; justify-content: space-between;">
                    <div style="flex: 1;">
                        <h3 style="font-size: 14px; font-weight: 600; margin: 0;">Mobile App UI Kit</h3>
                        <p style="font-size: 12px; color: #6b7280; margin: 4px 0 0 0;">By Alex Chen • UI Design</p>
                        <p style="font-size: 11px; color: #9ca3af; margin: 4px 0 0 0;">Saved 2 days ago • 542 ❤️</p>
                    </div>
                    <button style="padding: 6px 12px; background: #fee2e2; color: #dc2626; border: none; border-radius: 6px; font-size: 12px; cursor: pointer; font-weight: 600;">✕</button>
                </div>
            </div>
        </div>

        <div style="background: white; border: 1px solid #e5e7eb; border-radius: 8px; overflow: hidden;">
            <div style="width: 100%; height: 120px; background: linear-gradient(135deg, #764ba2 0%, #667eea 100%);"></div>
            <div style="padding: 12px;">
                <div style="display: flex; align-items: flex-start; justify-content: space-between;">
                    <div style="flex: 1;">
                        <h3 style="font-size: 14px; font-weight: 600; margin: 0;">SaaS Dashboard Template</h3>
                        <p style="font-size: 12px; color: #6b7280; margin: 4px 0 0 0;">By Maria Garcia • Web Design</p>
                        <p style="font-size: 11px; color: #9ca3af; margin: 4px 0 0 0;">Saved 5 days ago • 389 ❤️</p>
                    </div>
                    <button style="padding: 6px 12px; background: #fee2e2; color: #dc2626; border: none; border-radius: 6px; font-size: 12px; cursor: pointer; font-weight: 600;">✕</button>
                </div>
            </div>
        </div>

        <div style="background: white; border: 1px solid #e5e7eb; border-radius: 8px; overflow: hidden;">
            <div style="width: 100%; height: 120px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);"></div>
            <div style="padding: 12px;">
                <div style="display: flex; align-items: flex-start; justify-content: space-between;">
                    <div style="flex: 1;">
                        <h3 style="font-size: 14px; font-weight: 600; margin: 0;">E-commerce Store Design</h3>
                        <p style="font-size: 12px; color: #6b7280; margin: 4px 0 0 0;">By Mike Johnson • E-commerce</p>
                        <p style="font-size: 11px; color: #9ca3af; margin: 4px 0 0 0;">Saved 1 week ago • 276 ❤️</p>
                    </div>
                    <button style="padding: 6px 12px; background: #fee2e2; color: #dc2626; border: none; border-radius: 6px; font-size: 12px; cursor: pointer; font-weight: 600;">✕</button>
                </div>
            </div>
        </div>

        <div style="background: white; border: 1px solid #e5e7eb; border-radius: 8px; overflow: hidden;">
            <div style="width: 100%; height: 120px; background: linear-gradient(135deg, #764ba2 0%, #667eea 100%);"></div>
            <div style="padding: 12px;">
                <div style="display: flex; align-items: flex-start; justify-content: space-between;">
                    <div style="flex: 1;">
                        <h3 style="font-size: 14px; font-weight: 600; margin: 0;">Social Media App UI</h3>
                        <p style="font-size: 12px; color: #6b7280; margin: 4px 0 0 0;">By Emma Wilson • Mobile App</p>
                        <p style="font-size: 11px; color: #9ca3af; margin: 4px 0 0 0;">Saved 2 weeks ago • 203 ❤️</p>
                    </div>
                    <button style="padding: 6px 12px; background: #fee2e2; color: #dc2626; border: none; border-radius: 6px; font-size: 12px; cursor: pointer; font-weight: 600;">✕</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
