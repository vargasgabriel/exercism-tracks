class Diamond {
  final String _padding = ' ';

  List<String> rows(String center) {
    int begin = "A".codeUnitAt(0);
    int end = center.toUpperCase().codeUnitAt(0);

    int padLeftWidth = end - begin + 1;
    int padRightWidth = 1;

    List<String> rows = [];

    for (int i = begin; i <= end; i++) {
      String letter = String.fromCharCode(i);

      String sectorOneLeft = letter.padLeft(padLeftWidth, _padding);
      String sectorOneRight = letter.padRight(padRightWidth, _padding).substring(1);

      String sectorTwoLeft = letter.padLeft(padRightWidth, _padding).substring(1);
      String sectorTwoRight = letter.padRight(padLeftWidth, _padding).substring(1);

      rows.add('$sectorOneLeft$sectorOneRight$sectorTwoLeft$sectorTwoRight');

      padRightWidth++;
      padLeftWidth--;
    }

    List<String> bottom = [];
    rows.reversed.skip(1).forEach((row) => bottom.add(row));

    rows.addAll(bottom);

    return rows;
  }
}
