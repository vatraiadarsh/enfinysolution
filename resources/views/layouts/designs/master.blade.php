<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <meta charset="UTF-8">
	<title>Enfinity || Ennovation</title>

	<!-- mobile responsive meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css">

	<link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" href="images/favicon/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="images/favicon/favicon-16x16.png" sizes="16x16">
</head>

<body>

    @include('layouts.designs.header')
    @yield('content')
    @include('layouts.designs.footer')
