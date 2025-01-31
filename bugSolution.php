function myFunction() {
  for (let i = 0; i < 10; i++) {
    // Some code here
    if (someCondition) {
      continue 2; // Continue to the next iteration of the outer loop
    }
    // More code here
  }
}