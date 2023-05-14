function getBotResponse(input) {
    if (input == "1" || input == "Kapan barang akan datang?" || input == "kapan barang akan datang" || input == "Kapan barang akan datang" || input == "kapan barang akan datang?") {
        return "Barang akan segera datang";
    } else if (input == "2" || input == "Apakah barang masih ada stok?" || input == "apakah barang masih ada stok" || input == "Apakah barang akan datang?"|| input == "apakah barang akan segera datang?") {
        return "Stok selalu tersedia";
    } else {
        return "Cobalah bertanya mengenai hal diatas";
    }
}
