//Fungsi Kembali
function goBack() {
    window.history.back();
}

    let inputCounter = 1; // Counter untuk input ID
    const inputContainer = document.getElementById("input-container");
    const addSieButton = document.getElementById("add-sie-btn");
    const sieList = document.getElementById("sie-list");
    const coordList = document.getElementById("CoordList");

    // Fungsi untuk Menambahkan Card
    function addCard(sieValue, inputId) {
        const card = document.createElement("div");
        card.className =
            "card border-2 rounded-lg p-4 border-gray-400 mb-4 flex justify-between items-center";
        card.setAttribute("data-input-id", inputId);

        card.innerHTML = `
        <div>
        <h3 class="font-semibold text-gray-800">Koordinator Sie ${sieValue}</h3>
        <p class="text-gray-500 my-3 text-sm">Undang mahasiswa untuk bergabung</p>
        </div>
        <button 
        class="text-blue-950 font-semibold border-2 border-blue-950 px-4 py-2 rounded-lg hover:bg-blue-950 hover:text-white delete-card-btn">
        Undang
        </button>
    `;

        coordList.appendChild(card);
    }

    // Fungsi Tambah Sie
    addSieButton.addEventListener("click", () => {
        const currentInput = document.getElementById(
            `sie-input-${inputCounter}`
        );
        const sieValue = currentInput.value.trim();

        if (sieValue) {
            // Sembunyikan Input Saat Ini
            currentInput.classList.add("hidden");

            // Buat Chip Baru
            const chip = document.createElement("div");
            chip.className =
                "chip flex items-center gap-2 bg-gray-200 px-4 py-2 rounded";
            chip.setAttribute("data-input-id", `sie-input-${inputCounter}`);
            chip.innerHTML = `
        <span>${sieValue}</span>
        <button class="delete-btn text-red-500 hover:text-white hover:bg-red-500 rounded-full px-1 border border-red-500">
            &minus;
        </button>
        `;
            sieList.appendChild(chip);

            // Tambahkan Card
            addCard(sieValue, `sie-input-${inputCounter}`);

            // Tambahkan Input Baru
            inputCounter++;
            const newInput = document.createElement("input");
            newInput.type = "text";
            newInput.id = `sie-input-${inputCounter}`;
            newInput.placeholder = "Tambah Sie yang dibutuhkan";
            newInput.className =
                "sie-input ml-4 px-4 py-2 w-full border rounded focus:outline-none";
            inputContainer.appendChild(newInput);

            // Event Hapus Chip
            chip.querySelector(".delete-btn").addEventListener("click", () => {
                const inputId = chip.getAttribute("data-input-id");
                chip.remove();

                // Hapus Card yang Terkait
                const cardToRemove = coordList.querySelector(
                    `[data-input-id="${inputId}"]`
                );
                if (cardToRemove) cardToRemove.remove();

                // Hapus Input Field yang Terhubung
                const inputFieldToRemove = document.getElementById(inputId);
                if (inputFieldToRemove) inputFieldToRemove.remove();
            });
        }
    });

//Konfirmasi Tanggal Salah
document.addEventListener("DOMContentLoaded", () => {
    const startDateInput = document.getElementById("startDate");
    const endDateInput = document.getElementById("endDate");

    startDateInput.addEventListener("change", () => {
        if (endDateInput.value && startDateInput.value > endDateInput.value) {
            alert("Tanggal awal tidak boleh lebih dari tanggal akhir!");
            startDateInput.value = "";
        }
    });

    endDateInput.addEventListener("change", () => {
        if (startDateInput.value && endDateInput.value < startDateInput.value) {
            alert("Tanggal akhir tidak boleh lebih awal dari tanggal awal!");
            endDateInput.value = "";
        }
    });
});

// Menambahkan agenda baru
document.getElementById("add-agenda").addEventListener("click", function () {
    const agendaList = document.getElementById("agenda-list");
    const newAgenda = document.querySelector("[data-agenda]").cloneNode(true);

    // Bersihkan nilai input pada elemen baru
    newAgenda.querySelector('input[name="edit_agenda_name[]"]').value = "";
    newAgenda.querySelector('input[name="edit_agenda_date[]"]').value = "";

    // Tambahkan ke daftar agenda
    agendaList.appendChild(newAgenda);

    // Re-assign tombol hapus
    assignRemoveEvent();
});

// Fungsi untuk menghapus agenda
function assignRemoveEvent() {
    document.querySelectorAll(".remove-agenda").forEach((button) => {
        button.addEventListener("click", function () {
            if (document.querySelectorAll("[data-agenda]").length > 1) {
                this.parentElement.remove();
            }
        });
    });
}

// Assign event pada elemen awal
assignRemoveEvent();

// Element reference
const inviteBtn = document.getElementById("invite-btn");
const beforeConfirm = document.getElementById("before-confirm");
const afterConfirm = document.getElementById("after-confirm");

// Event Listener
inviteBtn.addEventListener("click", () => {
    beforeConfirm.classList.add("hidden"); // Sembunyikan tampilan sebelum konfirmasi
    afterConfirm.classList.remove("hidden"); // Tampilkan tampilan setelah konfirmasi
});

