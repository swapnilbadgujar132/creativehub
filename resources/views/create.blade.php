@extends('layouts.app')

@section('title', 'Create | CreativeHub')

@section('content')
<div style="max-width: 896px; margin: 0 auto; padding: 16px; padding-top: 24px;">
    <h1 style="font-size: 24px; font-weight: bold; margin: 0 0 24px 0;">Create New Project</h1>

    <!-- Upload Area -->
    <div style="border: 2px dashed #667eea; border-radius: 8px; padding: 32px 16px; text-align: center; margin-bottom: 24px; background: rgba(102, 126, 234, 0.05) cursor: pointer;">
        <div style="font-size: 48px; margin-bottom: 12px;">📤</div>
        <h3 style="font-size: 16px; font-weight: 600; color: #667eea; margin: 0;">Upload Files or Drag Here</h3>
        <p style="font-size: 12px; color: #6b7280; margin: 8px 0 0 0;">Images, videos, or documents</p>
    </div>

    <!-- Form -->
    <form style="display: flex; flex-direction: column; gap: 16px;">
        <div>
            <label style="display: block; font-size: 14px; font-weight: 600; margin-bottom: 8px;">Project Title</label>
            <input type="text" placeholder="Enter project title" style="width: 100%; padding: 12px; border: 1px solid #e5e7eb; border-radius: 8px; font-size: 14px; outline: none; box-sizing: border-box;" />
        </div>

        <div>
            <label style="display: block; font-size: 14px; font-weight: 600; margin-bottom: 8px;">Description</label>
            <textarea placeholder="Describe your project..." style="width: 100%; padding: 12px; border: 1px solid #e5e7eb; border-radius: 8px; font-size: 14px; outline: none; min-height: 100px; box-sizing: border-box; font-family: inherit;"></textarea>
        </div>

        <div>
            <label style="display: block; font-size: 14px; font-weight: 600; margin-bottom: 8px;">Category</label>
            <select style="width: 100%; padding: 12px; border: 1px solid #e5e7eb; border-radius: 8px; font-size: 14px; outline: none; box-sizing: border-box;">
                <option>-- Select Category --</option>
                <option>Design</option>
                <option>Development</option>
                <option>Photography</option>
                <option>Music</option>
                <option>Other</option>
            </select>
        </div>

        <div>
            <label style="display: block; font-size: 14px; font-weight: 600; margin-bottom: 8px;">Visibility</label>
            <select style="width: 100%; padding: 12px; border: 1px solid #e5e7eb; border-radius: 8px; font-size: 14px; outline: none; box-sizing: border-box;">
                <option>Public</option>
                <option>Private</option>
                <option>Friends Only</option>
            </select>
        </div>

        <div style="display: flex; gap: 12px; margin-top: 24px;">
            <button type="submit" style="flex: 1; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; padding: 12px; border: none; border-radius: 8px; font-weight: 600; cursor: pointer;">Publish Project</button>
            <button type="reset" style="flex: 1; background: white; color: #6b7280; padding: 12px; border: 2px solid #e5e7eb; border-radius: 8px; font-weight: 600; cursor: pointer;">Clear</button>
        </div>
    </form>
</div>
@endsection
