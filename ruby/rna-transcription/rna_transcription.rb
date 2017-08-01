class Complement

  RNA = {
    'G' => 'C',
    'C' => 'G',
    'T' => 'A',
    'A' => 'U'
  }

  def self.of_dna (dna_strand)

    rna_strand = dna_strand.chars.map { |dna| RNA[dna] }
    rna_strand = rna_strand.join

    unless rna_strand.length == dna_strand.length then
      return ""
    end

    return rna_strand
  end
end

module BookKeeping
  VERSION = 4
end