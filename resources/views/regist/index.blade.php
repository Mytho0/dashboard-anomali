<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: system-ui;
        }
    </style>
</head>

<body>
    {{-- <div class="flex flex-col bg-[#FFFFFF]"> --}}
    {{-- <div class="flex flex-col items-start self-stretch bg-[#FFFFFF] h-[1024px]"> --}}
    <div class="flex items-center">
        <div
            class="w-1/2 flex flex-col shrink-0 items-start bg-[url('https://storage.googleapis.com/tagjs-prod.appspot.com/v1/JLPlDhJ5JR/81xr1xg8_expires_30_days.png')] bg-cover h-screen relative">
            <span class="text-[#FFFFFF] text-4xl font-bold inset-0 flex justify-center items-center absolute">
                Silakan Membuat Akun!
            </span>
        </div>
        <div class="flex flex-col shrink-0 items-start w-1/2 h-screen p-10">
            <div class="flex flex-col gap-4 items-start mb-[41px]">
                <span class="text-[#000000] text-4xl font-bold ">
                    Register
                </span>
                <span class="text-[#000000] text-[16px]">
                    Buat akun untuk mengakses dashboard!
                </span>
            </div>
            <div class="flex flex-col items-center gap-4 mb-[41px]">
                <div class= "flex flex-col items-start">
                    <span class="text-[#000000] text-md w-[71px] font-bold 	">
                        Email
                    </span>
                    <div class="w-[505px] h-[55px] rounded-[8px]">
                        <input type="text" id="email"
                            class=" border text-base px-2 py-2  bg-[#D9D9D9] w-[505px] h-[55px] rounded-[8px]"
                            placeholder="Masukkan Email" />
                    </div>
                </div>
                <div class="flex flex-col items-start ">
                    <span class="text-[#000000] text-md w-[71px] font-bold gap-4">
                        Password
                    </span>
                    <div class="bg-[#D9D9D9] w-[505px] h-[55px] rounded-[8px]">
                        <input type="text" id="password"
                            class="border text-base px-2 py-2  bg-[#D9D9D9] w-[505px] h-[55px] rounded-[8px]"
                            placeholder="Masukkan Password" />
                    </div>
                </div>
                <div class="flex flex-col items-start">
                    <span class="text-[#000000] text-md font-bold gap-4">
                        Re-Password
                    </span>
                    <div class="bg-[#D9D9D9] w-[505px] h-[55px] rounded-[8px]">
                        <input type="text" id="password"
                            class="border text-base px-2 py-2  bg-[#D9D9D9] w-[505px] h-[55px] rounded-[8px]"
                            placeholder="Masukkan Password Kembali" />
                    </div>
                </div>
                <button
                    class="flex flex-col items-center bg-[#FFBA41] text-left p-4 w-full mb-2 rounded-[10px] justify-center border-0"
                    onclick="alert('Pressed!')"}>
                    <span class="text-[#000000] text-md font-bold">
                        Buat akun
                    </span>
                </button>
                <span class="text-[#000000] text-sm">
                    Sudah punya akun? <a class="font-bold" href="/login">Login</a>
                </span>
            </div>

            </div>
            {{-- </div> --}}
            {{-- </div> --}}
</body>

</html>
