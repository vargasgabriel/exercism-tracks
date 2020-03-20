String reverse(String word) {
  return word.split('').reversed.join();

  // community solutions
  // https://exercism.io/tracks/dart/exercises/reverse-string/solutions/8debf36edd60434c86216f4180628b99

  // return String.fromCharCodes(word.codeUnits.reversed);
  // OR
  // return String.fromCharCodes(word.runes.toList().reversed);
}
