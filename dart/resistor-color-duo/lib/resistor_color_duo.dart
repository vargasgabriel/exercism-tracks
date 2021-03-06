class ResistorColorDuo {

  List<String> colors = [
    'black',
    'brown',
    'red',
    'orange',
    'yellow',
    'green',
    'blue',
    'violet',
    'grey',
    'white',
  ];
  
  int value(List<String> colors) {
    return (colorCode(colors[0]) * 10 ) + colorCode(colors[1]);
  }

  int colorCode(String color) {
    return colors.indexOf(color);
  }
}
