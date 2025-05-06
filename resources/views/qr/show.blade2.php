<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $device->name }}</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-800 min-h-screen flex items-center justify-center p-6">

<div class="bg-white max-w-2xl w-full p-6 rounded shadow space-y-6">

    <div>
        <h1 class="text-2xl font-bold">{{ $device->name }}</h1>
        <p class="text-sm text-gray-500">QR Code: <span class="font-mono">{{ $device->code }}</span></p>
    </div>

    <div class="text-sm space-y-2">
        <p><strong>Serial Number:</strong> {{ $device->serial_number }}</p>
        <p><strong>Order Number:</strong> {{ $device->order_number }}</p>
        <p><strong>Address:</strong> {{ $device->address }}</p>
        <p><strong>Warranty:</strong> {{ $device->warranty ? 'Yes' : 'No' }}</p>
        <p><strong>Warranty Details:</strong> {{ $device->warranty_description }}</p>
        <p><strong>Delivery Date:</strong> {{ \Carbon\Carbon::parse($device->delivery_date)->format('F d, Y') }}</p>
    </div>

    @if($device->engineeringContact)
        <div class="bg-gray-50 p-4 rounded">
            <h2 class="font-semibold text-lg mb-2">Service Contact</h2>
            <ul class="text-sm space-y-1">
                <li><strong>Company:</strong> {{ $device->engineeringContact->company_name }}</li>
                <li><strong>Technician:</strong> {{ $device->engineeringContact->technician_name }}</li>
                @if($device->engineeringContact->contact_phone)
                    <li><strong>Phone:</strong> {{ $device->engineeringContact->contact_phone }}</li>
                @endif
                @if($device->engineeringContact->email)
                    <li><strong>Email:</strong> {{ $device->engineeringContact->email }}</li>
                @endif
            </ul>
        </div>
    @endif

    <div>
        <h2 class="text-lg font-semibold mb-2">Report a Problem</h2>
        <form class="space-y-3">
            <input type="text" placeholder="Your Name" class="w-full p-2 border border-gray-300 rounded">
            <input type="email" placeholder="Your Email" class="w-full p-2 border border-gray-300 rounded">
            <textarea placeholder="Describe the issue" class="w-full p-2 border border-gray-300 rounded"></textarea>
            <button type="submit" disabled class="bg-gray-400 text-white px-4 py-2 rounded opacity-60 cursor-not-allowed">
                Submit (demo only)
            </button>
        </form>
    </div>

</div>

</body>
</html>
