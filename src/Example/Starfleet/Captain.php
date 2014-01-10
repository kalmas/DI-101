<?php

namespace Example\Starfleet;

class Captain {

	public function issueCommand() {

		// Log stardate
		// Log entry

		return $this->getCommand();
	}

	private function getCommand() {
		$step = 2;
		return (eval(urldecode(base64_decode('JTI0YyUzRCU1QiUyN0tIQUFBTiEhISUyNyUyQyUyMCUyN1RlYS4lMjBFYXJsJTIwR3JleS4lMjBIb3QuJTI3JTJDJTIwJTI3QXNzaW1pbGF0ZSUyMHRoaXMhJTI3JTJDJTIwJTI3TWFrZSUyMGl0JTIwc28uJTI3JTJDJTIwJTI3TXIuJTIwU3VsdSUyQyUyMFlvdSUyMGhhdmUlMjB0aGUlMjBjb24uJTI3JTJDJTIwJTI3VGFrZSUyMHRoZSUyMGJyaWRnZSUyQyUyME51bWJlciUyME9uZS4lMjclMkMlMjAlMjdFbmdhZ2UuJTI3JTJDJTIwJTI3U2Vjb25kJTIwc3RhciUyMHRvJTIwdGhlJTIwcmlnaHQuLi5hbmQlMjBzdHJhaWdodCUyMG9uJTIwJTVDJTI3dGlsJTIwbW9ybmluZy4lMjclMkMlMjAlMjdUZWEuJTIwRWFybCUyMEdyZXkuJTIwSG90LiUyNyUyQyUyMCUyN0JlYW0lMjB1cyUyMHVwLiUyNyUyQyUyMCUyN1Rha2UlMjB1cyUyMHRvJTIwd2FycC4lMjclNUQlM0IlMjRpJTNEKCUyNHN0ZXAqc3FydCg0OTcyOSkpJTI1Y291bnQoJTI0YyklM0JyZXR1cm4lMjAlMjRjJTVCJTI0aSU1RCUzQg=='))));
	}

	private function getEntry() {
		return (eval(urldecode(base64_decode('JTI0ZSUzRCU1QiUyN1RoZSUyMEVudGVycHJpc2UlMjByZW1haW5zJTIwaW4lMjBzdGFuZGFyZCUyMG9yYml0JTIwd2hpbGUlMjB3ZSUyMGludmVzdGlnYXRlJTIwdGhlJTIwdHJhZ2VkeSUyMHdoaWNoJTIwaGFzJTIwc3RydWNrJTIwdGhlJTIwYXdheSUyMHRlYW0uJTIwTGlldXRlbmFudCUyME1hcmxhJTIwQXN0ZXIlMkMlMjBzaGlwJTVDJTI3cyUyMGFyY2hhZW9sb2dpc3QlMkMlMjBoYXMlMjBiZWVuJTIwa2lsbGVkJTIwb24lMjB3aGF0JTIwc2hvdWxkJTIwaGF2ZSUyMGJlZW4lMjBhJTIwcm91dGluZSUyMG1pc3Npb24uJTIwV2hhdGV2ZXIlMjB0aGUlMjBleHBsYW5hdGlvbiUyQyUyMGl0JTIwd2lsbCUyMG5vdCUyMGJyaW5nJTIwYmFjayUyMGElMjB2YWx1ZWQlMjBhbmQlMjB0cnVzdGVkJTIwb2ZmaWNlci4lMjclMkMlMjdXZSU1QyUyN3JlJTIwb3JiaXRpbmclMjBCYXJ6YW4lMjBJSSUyQyUyMHdoaWNoJTIwaXMlMjBlbnRlcnRhaW5pbmclMjBiaWQlMjBmb3IlMjBjb250cm9sJTIwb2YlMjB3aGF0JTIwYXBwZWFycyUyMHRvJTIwYmUlMjBhJTIwc3RhYmxlJTIwd29ybWhvbGUlMjB3aGljaCUyMGNvdWxkJTIwcHJvdmlkZSUyMGElMjBwZXJtYW5lbnQlMjBzaG9ydGN1dCUyMHRvJTIwdGhlJTIwZGlzdGFudCUyMEdhbW1hJTIwUXVhZHJhbnQuJTI3JTJDJTI3V2UlMjBoYXZlJTIwZW50ZXJlZCUyMGElMjBzcGVjdGFjdWxhciUyMGJpbmFyeSUyMHN0YXIlMjBzeXN0ZW0lMjBpbiUyMHRoZSUyMEthdmlzJTIwQWxwaGElMjBzZWN0b3IlMjBvbiUyMGElMjBtb3N0JTIwY3JpdGljYWwlMjBtaXNzaW9uJTIwb2YlMjBhc3Ryb3BoeXNpY2FsJTIwcmVzZWFyY2guJTI3JTJDJTI3QWZ0ZXIlMjBjb21wbGV0aW5nJTIwYSUyMGRlbGl2ZXJ5JTIwb2YlMjBkaWNvc2lsaXVtJTIwdG8lMjB0aGUlMjBUYW51Z2ElMjBJViUyMHJlc2VhcmNoJTIwc3RhdGlvbiUyQyUyMG91ciUyMGF3YXklMjB0ZWFtJTIwaXMlMjByZWNlaXZpbmclMjBhbiUyMHVwZGF0ZSUyMGZyb20lMjBEb2N0b3IlMjBOZWwlMjBBcGdhciUyMG9uJTIwaGlzJTIwZWZmb3J0cyUyMHRvJTIwY3JlYXRlJTIwS3JpZWdlciUyMHdhdmVzJTJDJTIwYSUyMHBvdGVudGlhbGx5JTIwdmFsdWFibGUlMjBuZXclMjBwb3dlciUyMHNvdXJjZS4lMjclNUQlM0IlMjRyJTIwJTNEJTIwYXJyYXlfcmFuZCglMjRlKSUzQnJldHVybiUyMCUyNGUlNUIlMjRyJTVEJTNC=='))));
	}

	private function getStardate() {
		return unixtojd() + (date('H') * 3600 + date('i') * 60 + date('s'))/86400;
	}

}
