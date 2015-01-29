require './sort'

def random_arr
  0.upto(30).to_a.shuffle
end

describe Sort do
  describe '#bubble' do
    it 'sorts test 1' do
      arr = random_arr
      expect(Sort.bubble arr.clone).to eq arr.sort
    end
    it 'sorts test 2' do
      arr = random_arr
      expect(Sort.bubble arr.clone).to eq arr.sort
    end
  end

  describe '#shaker' do
    it 'sorts test 1' do
      arr = random_arr
      expect(Sort.shaker arr.clone).to eq arr.sort
    end
    it 'sorts test 2' do
      arr = random_arr
      expect(Sort.shaker arr.clone).to eq arr.sort
    end
  end

  describe '#selection' do
    it 'sorts test 1' do
      arr = random_arr
      expect(Sort.selection arr.clone).to eq arr.sort
    end
    it 'sorts test 2' do
      arr = random_arr
      expect(Sort.selection arr.clone).to eq arr.sort
    end
  end
end
