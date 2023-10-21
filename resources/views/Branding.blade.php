@extends('layouts.main')
<!DOCTYPE html>

<script>
    document.title = 'Branding'
</script>

@section('content')
<div>
    <div class="branding-page">
        <div>
            <div class="branding-content">
                <div class="branding-image">
                    <img src="{{asset("./images/branding.png")}}" alt="">
                </div>
                <div>
                    <div>
                        <div class="branding-text">
                            <div class="branding-title">
                                <h2>Branding</h2>
                            </div>
                            <div class="branding-list">
                                <ul>
                                    <li>Brand identity</li>
                                    <li>Brand messaging</li>
                                    <li>Brand messaging</li>
                                    <li>Brand management</li>
                                    <li>Website design</li>
                                    <li>Social media marketing</li>
                                    <li>Content marketing</li>
                                    <li>Market research</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
