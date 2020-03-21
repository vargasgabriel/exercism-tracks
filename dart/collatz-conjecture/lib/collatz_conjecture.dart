class CollatzConjecture {
  int steps(int number) {
    if (number == 0 || number.isNegative) {
      throw ArgumentError('Only positive numbers are allowed');
    }

    int result = number;
    int steps = 0;
    while (result != 1) {
      result = result.isEven ? result ~/ 2 : (3 * result) + 1;
      steps++;
    }

    return steps;
  }
}
