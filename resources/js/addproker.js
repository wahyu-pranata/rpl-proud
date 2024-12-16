// Ambil elemen DOM
const addSieButton = document.getElementById("addSieButton");
const sieInput = document.getElementById("sieInput");
const sieList = document.getElementById("sieList");

// Fungsi untuk menambahkan Sie
function addSie() {
    const sieName = sieInput.value.trim(); // Ambil input dan hapus spasi kosong
    if (sieName === "") return; // Abaikan jika input kosong

    // Buat elemen chip baru
    const chip = document.createElement("div");
    chip.className =
        "flex items-center gap-2 px-3 py-2 border border-gray-300 rounded-lg bg-white shadow-sm";

    // Tambahkan teks ke dalam chip
    const sieText = document.createElement("span");
    sieText.textContent = sieName;
    chip.appendChild(sieText);

    // Tambahkan tombol hapus
    const removeButton = document.createElement("button");
    removeButton.className =
        "w-5 h-5 flex items-center justify-center rounded-full bg-red-600 text-white text-sm font-bold hover:bg-red-700";
    removeButton.textContent = "-";
    removeButton.onclick = () => {
        sieList.removeChild(chip); // Hapus chip dari daftar
    };
    chip.appendChild(removeButton);

    // Tambahkan chip ke dalam daftar
    sieList.appendChild(chip);

    // Kosongkan input setelah ditambahkan
    sieInput.value = "";
}

// Tambahkan event listener ke tombol tambah
addSieButton.addEventListener("click", addSie);

// Tambahkan event listener untuk Enter key
sieInput.addEventListener("keypress", (event) => {
    if (event.key === "Enter") {
        addSie();
    }
});

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
    newAgenda.querySelector('input[name="agenda_name[]"]').value = "";
    newAgenda.querySelector('input[name="agenda_date[]"]').value = "";

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
