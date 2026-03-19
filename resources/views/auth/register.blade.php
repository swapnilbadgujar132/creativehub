@extends('layouts.app')

@section('title', 'Register | CreativeHub')

@section('content')
<div style="max-width: 896px; margin: 0 auto; padding: 16px;">
    <!-- Header -->
    <div style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; padding: 48px 16px; text-align: center; border-radius: 8px; margin: 24px 0;">
        <h1 style="font-size: 24px; font-weight: bold; margin: 0;">Create Account</h1>
        <p style="font-size: 14px; opacity: 0.9; margin: 8px 0 0 0;">Join our creative community</p>
    </div>

    <!-- Register Form -->
    <form style="display: flex; flex-direction: column; gap: 16px; margin-bottom: 24px;">
        <div>
            <label style="display: block; font-size: 14px; font-weight: 600; margin-bottom: 8px;">Full Name</label>
            <input type="text" placeholder="John Developer" style="width: 100%; padding: 12px; border: 1px solid #e5e7eb; border-radius: 8px; font-size: 14px; outline: none; box-sizing: border-box;" />
        </div>

        <div>
            <label style="display: block; font-size: 14px; font-weight: 600; margin-bottom: 8px;">Email</label>
            <input type="email" placeholder="your@email.com" style="width: 100%; padding: 12px; border: 1px solid #e5e7eb; border-radius: 8px; font-size: 14px; outline: none; box-sizing: border-box;" />
        </div>

        <div>
            <label style="display: block; font-size: 14px; font-weight: 600; margin-bottom: 8px;">Username</label>
            <input type="text" placeholder="johndeveloper" style="width: 100%; padding: 12px; border: 1px solid #e5e7eb; border-radius: 8px; font-size: 14px; outline: none; box-sizing: border-box;" />
        </div>

        <div>
            <label style="display: block; font-size: 14px; font-weight: 600; margin-bottom: 8px;">Password</label>
            <input type="password" placeholder="••••••••" style="width: 100%; padding: 12px; border: 1px solid #e5e7eb; border-radius: 8px; font-size: 14px; outline: none; box-sizing: border-box;" />
        </div>

        <div>
            <label style="display: block; font-size: 14px; font-weight: 600; margin-bottom: 8px;">Confirm Password</label>
            <input type="password" placeholder="••••••••" style="width: 100%; padding: 12px; border: 1px solid #e5e7eb; border-radius: 8px; font-size: 14px; outline: none; box-sizing: border-box;" />
        </div>

        <div style="display: flex; gap: 8px;">
            <input type="checkbox" />
            <label style="font-size: 12px; color: #6b7280;">I agree to the terms and privacy policy</label>
        </div>

        <button type="submit" style="width: 100%; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; padding: 12px; border: none; border-radius: 8px; font-weight: 600; cursor: pointer; font-size: 14px;">Create Account</button>
    </form>

    <!-- Social Registration -->
    <div style="display: flex; gap: 12px; margin-bottom: 24px;">
        <button style="flex: 1; padding: 12px; background: white; border: 1px solid #e5e7eb; border-radius: 8px; font-weight: 600; cursor: pointer; font-size: 14px;">Google</button>
        <button style="flex: 1; padding: 12px; background: white; border: 1px solid #e5e7eb; border-radius: 8px; font-weight: 600; cursor: pointer; font-size: 14px;">Apple</button>
    </div>

    <!-- Login Link -->
    <div style="text-align: center;">
        <p style="font-size: 14px; color: #6b7280;">Already have an account? <a href="/login" style="color: #667eea; text-decoration: none; font-weight: 600;">Sign In</a></p>
    </div>
</div>
@endsection
