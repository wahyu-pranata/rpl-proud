<div class="relative mt-6 h-full">
    <div class="w-full h-full bg-white rounded-lg shadow-md overflow-hidden overflow-y-scroll">
        {{-- data table --}}
        <table class="w-full">
            @foreach ($rows as $row)
                <tr class="{{ $loop->last ? '' : 'border-b-2' }}">
                    <td colspan="4" class="p-4">
                        <div class="flex pr-2 justify-between">
                            {{-- top --}}
                            <div>
                                <div class="text-lg font-bold">{{ $row['name'] }}</div>
                                <div class="mt-2">{{ $row['nim'] }}</div>
                            </div>
                            <div class="flex space-x-6">
                                <div class="text-center">
                                    <div>Tolak</div>
                                    <button onclick="rejectStudentProof(`{{ route('data_mhs.reject_student_proof', ['id' => $row['id'] ]) }}`)" class="flex items-center justify-center w-12 h-12 bg-red-500 text-white hover:bg-white hover:text-red-500 hover:border-2 hover:border-red-500 transition rounded-lg mt-2 hover:cursor-pointer">
                                        <svg width="29" height="29" viewBox="0 0 29 29" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M21.4639 21.2129L7.32173 7.07076" stroke="currentColor" stroke-width="4" stroke-linecap="round"/>
                                            <path d="M7.32129 21.2129L21.4634 7.07076" stroke="currentColor" stroke-width="4" stroke-linecap="round"/>
                                        </svg>
                                    </button>
                                </div>
                                <div class="text-center">
                                    <div>Terima</div>
                                    <button onclick="verifyStudentProof(`{{ route('data_mhs.verify_student_proof', ['id' => $row['id'] ]) }}`)" class="flex items-center justify-center w-12 h-12 bg-blue-500 text-white hover:bg-white hover:text-blue-500 hover:border-2 hover:border-blue-500 transition rounded-lg mt-2 hover:cursor-pointer">
                                        <svg width="25" height="23" viewBox="0 0 25 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2.67383 10.5631L10.0422 20.5631L22.6738 2.14209" stroke="currentColor" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                        {{-- bottom --}}
                        <div class="flex items-center space-x-16 mt-8">
                            @foreach ($row['details'] as $detail)
                                <div>
                                    <div class="text-gray-500">{{ $detail['label'] }}</div>
                                    <div>{{ $detail['value'] }}</div>
                                </div>
                            @endforeach
                            <div>
                                <div class="text-gray-500">Bukti<div>
                                <button onclick="">
                                    <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2.81445 18C2.26445 18 1.79379 17.8043 1.40245 17.413C1.01112 17.0217 0.81512 16.5507 0.814453 16V2C0.814453 1.45 1.01045 0.979333 1.40245 0.588C1.79445 0.196667 2.26512 0.000666667 2.81445 0H16.8145C17.3645 0 17.8355 0.196 18.2275 0.588C18.6195 0.98 18.8151 1.45067 18.8145 2V16C18.8145 16.55 18.6188 17.021 18.2275 17.413C17.8361 17.805 17.3651 18.0007 16.8145 18H2.81445ZM3.81445 14H15.8145L12.0645 9L9.06445 13L6.81445 10L3.81445 14Z" fill="#1E1E1E"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</div>

@pushOnce('scripts')
<script>
    const verifyStudentProof = async (route) => {
        const request = new Request(route, {
            method: "PATCH",
            body: JSON.stringify({ 'verified_by_major': 'verified' }),
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': @js(csrf_token()), // CSRF token for security
            },
        });

        response = await fetch(request);
        location.reload();
        return response;
    };

    const rejectStudentProof = async (route) => {
        const request = new Request(route, {
            method: "PATCH",
            body: JSON.stringify({ 'verified_by_major': 'rejected' }),
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': @js(csrf_token()), // CSRF token for security
            },
        });

        response = await fetch(request);
        location.reload();
        return response;
    };
</script>
@endPushOnce
