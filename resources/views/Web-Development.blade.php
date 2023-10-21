@extends('layouts.main')
<!DOCTYPE html>

<script>
    document.title = 'Web development'
</script>

@section('content')
<div>
    <div class="Web-page">
        <div>
            <div class="Web-content">
                <div class="Web-image">
                    <img src="{{asset("./images/development.png")}}" alt="">
                </div>
                <div>
                    <div>
                        <div class="Web-text">
                            <div class="Web-title">
                                <h2>Web Development</h2>
                            </div>
                            <div class="Web-list">
                                <ul>
                                    <li>Web design</li>
                                    <li>Web development</li>
                                    <li>Content creation</li>
                                    <li>Search engine optimization (SEO)</li>
                                    <li>Social media marketing</li>
                                    <li>Pay-per-click (PPC) advertising</li>
                                    <li>Website maintenance</li>
                                    <li>User experience (UX)</li>
                                    <li>Mobile app development</li>
                                    <li>Web analytics</li>
                                    <li>Accessibility testing</li>
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
