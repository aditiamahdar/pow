@cache = {}
def pow a, b
  return 1 if b.zero?
  return a if b.eql? 1
  if @cache[[a, b]]
    @cache[[a, b]]
  else
    @cache[[a, b]] = a * pow(a, b - 1)
  end
end
