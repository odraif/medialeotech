@extends('layouts.main')
<!DOCTYPE html>

<script>
    document.title = 'Marketing'
</script>

@section('content')
    <div>
        <div class="marketing-page">
            <div>
                <div class="marketing-content">
                    <div class="marketing-image">
                        <img src="{{asset("./images/social-media.png")}}" alt="">
                    </div>
                    <div>
                        <div>
                            <div class="marketing-text">
                                <div class="marketing-title">
                                    <h2>Marketing</h2>
                                </div>
                                <div class="marketing-list">
                                    <ul>
                                        <li>Brand Design & Strategy</li>
                                        <li>Copywriting & Strategy</li>
                                        <li>Social Media Management</li>
                                        <li>Workshops & Training</li>
                                        <li>Audience Analytics</li>
                                        <li>Website Development</li>
                                        <li>Search Engine Optimization</li>
                                        <li>Email Marketing</li>
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
