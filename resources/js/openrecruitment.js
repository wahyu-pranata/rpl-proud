//Fungsi Kembali
function goBack() {
    window.history.back();
}


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


// Menambahkan pertanyaan baru
document.getElementById("add-pertanyaan").addEventListener("click", function () {
    const questionList = document.getElementById("question-list");
    const newQuestion = document.querySelector("[data-pertanyaan]").cloneNode(true);

    // Bersihkan nilai input pada elemen baru
    newQuestion.querySelector('input[name="question_name[]"]').value = "";
    newQuestion.querySelector('input[name="agenda_date[]"]').value = "";

    // Tambahkan ke daftar pertanyaan
    questionList.appendChild(newQuestion);

    // Re-assign tombol hapus
    assignRemoveEvent();
});

// Fungsi untuk menghapus Pertanyaan
function assignRemoveEvent() {
    document.querySelectorAll(".remove-pertanyaan").forEach((button) => {
        button.addEventListener("click", function () {
            if (document.querySelectorAll("[data-pertanyaan]").length > 1) {
                this.parentElement.remove();
            }
        });
    });
}