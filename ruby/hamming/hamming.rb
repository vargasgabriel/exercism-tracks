class Hamming

  def self.compute (first_dna_strand, second_dna_strand)

    if (first_dna_strand.empty? || second_dna_strand.empty?) then
      return 0
    end

    if first_dna_strand.length != second_dna_strand.length then
      raise ArgumentError
    end

    first_dna_strand = first_dna_strand.chars
    second_dna_strand = second_dna_strand.chars

    return first_dna_strand.zip(second_dna_strand).count { |a, b| a != b }
  end

end

module BookKeeping
  VERSION = 3
end