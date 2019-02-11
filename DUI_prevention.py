import requests

def main():
	cases = ["bar", "night_club", "casino"]

	sumtotal = 0
	i = 0

	while i < len(cases):
		payload = {'key': '#insert key here', 'location': '44.227999,-76.493553', 'radius': '10', 'type' : cases[i]}
		payload_str = "&".join("%s=%s" % (k,v) for k,v in payload.items())
			
		r = requests.get('https://maps.googleapis.com/maps/api/place/nearbysearch/json', params=payload_str)
		jsonval = r.json()


		for j in range(len(jsonval["results"])):
			#print(jsonval["results"][j]["name"])
			#print("")
			sumtotal += 1

		i += 1

	if (sumtotal >= 1):
		prompt = "yes"
	else:
		prompt = "no"

	return prompt

if __name__ == "__main__":
main()

