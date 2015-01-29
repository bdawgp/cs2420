class Sort
  def self.bubble(arr)
    (arr.length - 1).downto(1).each do |last|
      swapped = false
      (1..last).each do |i|
        if arr[i] < arr[i-1]
          smaller = arr[i]
          arr[i] = arr[i-1]
          arr[i-1] = smaller 
          swapped = true
        end
      end
      break unless swapped
    end
    arr
  end

  def self.shaker(arr)
    min = 0
    max = arr.length-1
    (arr.length-1).times do |t|
      swapped = false
      interval = if t.even? then (min+1).upto(max) else (max-1).downto(min) end
      interval.each do |i|
        a = if t.even? then i-1 else i end
        b = if t.even? then i else i+1 end
        if arr[a] > arr[b]
          tmp = arr[a]
          arr[a] = arr[b]
          arr[b] = tmp
          swapped = true
        end
      end
      if t.even? then (max -= 1) else (min += 1) end
      break unless swapped
    end
    arr
  end

  def self.selection(arr)
    arr.length.times do |i|
      smallest_i = i
      smallest = arr[i]
      (i...arr.length).each do |c|
        if arr[c] < smallest
          smallest_i = c
          smallest = arr[c]
        end
      end

      unless smallest_i == i
        arr[smallest_i] = arr[i]
        arr[i] = smallest
      end
    end
    arr
  end
end
