class Gigasecond

  def self.from (time)
    seconds = time.strftime('%s').to_i 
    moment = seconds + 10**9
    return Time.at(moment)
  end

end

module BookKeeping
  VERSION = 6
end