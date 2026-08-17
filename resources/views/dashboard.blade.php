@extends('layouts.app')

@section('content')
<div class="dashboard">
    <section class="router-card">
        <div class="router-header">
            <div class="router-ip">172.16.0.1</div>
            <div class="router-meta">uptime: 1d20h22m</div>
        </div>
        <div class="router-stats">
            <div class="stat">المعالجات<br><strong>22%</strong></div>
            <div class="stat">الذاكرة<br><strong>47.8 / 128 MB</strong></div>
            <div class="stat">المستخدمون<br><strong>4</strong></div>
        </div>
    </section>

    <section class="services">
        <h3>الخدمات</h3>
        <div class="cards-grid">
            <div class="card red">المصروفات</div>
            <div class="card teal">نظام الهوستسبوت</div>
            <div class="card blue">نظام اليوزرمنجر</div>
            <div class="card light">التقارير</div>
            <div class="card">النسخ الاحتياطية</div>
            <div class="card">الملف الشخصي</div>
        </div>
    </section>

    <nav class="bottom-nav">
        <a class="nav-item">الرئيسية</a>
        <a class="nav-item">الخدمات</a>
        <a class="nav-action">+</a>
        <a class="nav-item">التقارير</a>
        <a class="nav-item">الملف</a>
    </nav>
</div>
@endsection
