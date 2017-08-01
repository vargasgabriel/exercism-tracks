class Raindrops

  def self.convert (number)

    result = ""

    (1..number).each do |divider|

      if (number % divider == 0) && divider == 3 then
        result << "Pling"
      elsif (number % divider == 0) && divider == 5 then
        result << "Plang"
      elsif (number % divider == 0) && divider == 7 then
        result << "Plong"
      end

    end

    if result.empty? then
      return number.to_s
    end

    return result
  end

end

module BookKeeping
  VERSION = 3
end