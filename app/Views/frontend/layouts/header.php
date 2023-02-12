<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Fakultas Kedokteran - Univeritas Mulawarman</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('/img/unmul.png'); ?>">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="<?= base_url(''); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(''); ?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url(''); ?>/css/magnific-popup.css">
    <link rel="stylesheet" href="<?= base_url(''); ?>/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url(''); ?>/css/themify-icons.css">
    <link rel="stylesheet" href="<?= base_url(''); ?>/css/nice-select.css">
    <link rel="stylesheet" href="<?= base_url(''); ?>/css/flaticon.css">
    <link rel="stylesheet" href="<?= base_url(''); ?>/css/gijgo.css">
    <link rel="stylesheet" href="<?= base_url(''); ?>/css/animate.css">
    <link rel="stylesheet" href="<?= base_url(''); ?>/css/slicknav.css">
    <link rel="stylesheet" href="<?= base_url(''); ?>/css/style.css">
    <!-- <link rel="stylesheet" href="<?= base_url(''); ?>/css/responsive.css"> -->
</head>

<style>
    body::-webkit-scrollbar {
        width: 0;
        height: 0;
    }

    body {
        -ms-overflow-style: none;
    }

    /* Loading Animation */


    #loader {
        justify-content: center;
        align-items: center;
        display: flex;
        position: fixed;
        top: 0;
        left: 0;
        width: 100vw;
        min-height: 100vh;
        padding: 0;
        margin: 0;
        z-index: 99999;
        background: #ffffff
    }

    .lds-ellipsis {
        display: inline-block;
        position: relative;
        width: 80px;
        height: 80px;
    }

    .lds-ellipsis div {
        position: absolute;
        top: 33px;
        width: 13px;
        height: 13px;
        border-radius: 50%;
        background: green;
        animation-timing-function: cubic-bezier(0, 1, 1, 0);
    }

    .lds-ellipsis div:nth-child(1) {
        left: 8px;
        animation: lds-ellipsis1 0.6s infinite;
    }

    .lds-ellipsis div:nth-child(2) {
        left: 8px;
        animation: lds-ellipsis2 0.6s infinite;
    }

    .lds-ellipsis div:nth-child(3) {
        left: 32px;
        animation: lds-ellipsis2 0.6s infinite;
    }

    .lds-ellipsis div:nth-child(4) {
        left: 56px;
        animation: lds-ellipsis3 0.6s infinite;
    }

    @keyframes lds-ellipsis1 {
        0% {
            transform: scale(0);
        }

        100% {
            transform: scale(1);
        }
    }

    @keyframes lds-ellipsis3 {
        0% {
            transform: scale(1);
        }

        100% {
            transform: scale(0);
        }
    }

    @keyframes lds-ellipsis2 {
        0% {
            transform: translate(0, 0);
        }

        100% {
            transform: translate(24px, 0);
        }
    }

    /* CSS ANIMATION */

    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    .carousels {
        opacity: 0;
        animation: fadeIn 1s ease-in-out 1s forwards;
    }


    .box {
        opacity: 0;
        transform: translateY(100%);
        transition: transform 0.5s ease-in-out 0.5s, opacity 0.5s ease-in-out 0.5s;
    }

    .box.show {
        transform: translateY(0);
        opacity: 1;
    }

    .box.active {
        opacity: 1;
        transform: translateX(0);
    }

    .box-visi {
        opacity: 0;
        transform: translateY(100%);
        transition: transform 0.5s ease-in-out 0.5s, opacity 0.5s ease-in-out 0.5s;
    }

    .box-visi.show {
        transform: translateY(0);
        opacity: 1;
    }

    .slide-in-text {
        opacity: 0;
        line-height: 50px;
        transform: translateX(50%);
        color: transparent;
        position: relative;
        right: -250px;
        transition: transform 0.5s ease-in-out 0.5s, opacity 0.5s ease-in-out 0.5s;
    }

    .slide-in-text.show {
        transform: translateX(0);
        right: 0;
        opacity: 1;

    }

    .cards {
        display: flex;
        flex-wrap: wrap;
    }

    .box-berita {
        opacity: 0;
        transform: translateX(-100%);
        transition: all 0.5s ease-in-out;
    }

    .box-berita.active {
        opacity: 1;
        transform: translateX(0);
    }

    .box-gambar {
        opacity: 0;
        transform: translateX(-100%);
        transition: all 0.3s ease-in-out;
    }

    .box-gambar.active {
        opacity: 1;
        transform: translateX(0);
    }

    .box-text {
        opacity: 0;
        transform: translateY(100%);
        transition: all 0.5s ease-in-out;
    }

    .box-text.active {
        opacity: 1;
        transform: translateY(0);
    }
</style>

<div id="loader">
    <div class="lds-ellipsis">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>