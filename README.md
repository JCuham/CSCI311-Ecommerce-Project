# csci-311-ecom

This project was created for Vancouver Island Universities CSCI 311 Spring 2022 by a team of four.

This project aims to be a location where VIU Computer science students can
create an account and list items for sale. This service is exclusive to computer
science students so that the community we already have can serve as a basis of
trust in an attempt to combat scams.

## Problem

Currently online marketplaces like Facebook Marketplace, Ebay and Craigs-list
suffer from a large amount of scammers operating fake auctions/listings on their
platforms. This forces buyers and sellers on these platforms to take measures to
prevent loss of capital or product and creates an apprehensive environment for
the buyers and sellers on the platform. We aim to solve these issues by creating
a marketplace platform in which buyers can trust that after they have sent
payment they will receive their item in the condition that it was advertised in
and sellers can send items to buyers without risk of charge backs or refund
scams.

## Solution
We will solve the scamming and apprehensive environment by creating an online
marketplace in which sellers must apply for verification and must be current
CSCI students at VIU before listing items on the marketplace. Preventing sellers
from scamming their prospective customers with falsely advertised products or
not delivering products after payment. We will also implement a verification
process for prospective buyers requiring them to have valid forms of payment
before they are able to purchase products on the marketplace as well as be
current CSCI students at VIU. The marketplace will be moderated by our team
allowing us full control over the marketplace letting us add or remove verified
users and adequately address issues that may arise between buyers and sellers on
our marketplace.

## Project Risks

There are several risks and consequences to consider. The primary is, naturally,
monetary. If we don’t get it right, we as developers stand to lose support from
our user base. If we can’t deliver an experience that keeps users coming back,
then the project will fail, and we’ll be out of a job. Whether it’s a
frustrating interface, or poor user experiences, we risk losing business to our
competitors. There are also legal, ethical, and moral risks. If our platform is
abused, say, for illicit solicitation, and we fail to provide an honest and
transparent experience for our users, we could be responsible for serious
real-world harm. 

There is also a risk of a skill gap, many team members have no previous
experience with the technologies that are going to be used, and no team member
has experience with PHP. This could pose a threat to the project as a whole, as
each team member is tasked with learning a great deal of concepts and languages
alongside the development of the project.

## Build

To fun this application first create an ssh tunnel to the database by entering
the following command:

```bash
./scripts/db-ssh-tunnel.sh
```

If it supplies you with the following output:

```txt
Run command: export VIU_USER=<your-viu-username>
```

Then you run the command that you are prompted to enter replacing
`<your-viu-username>`, with the user name that you use on otter.

Next you need to set up your .env file by issuing the following command:

```bash
cp .env.sample .env
```

Then, open up the new `.env` file and fill in the missing values. Finally, you
run the following command to create the required environment variables:

```bash
source .env
```

*To learn more about why we use environment variables you can read 
[this article](https://hyperlane.co/blog/the-benefits-of-environment-variables-and-how-to-use-them).

### Dependencies

```
sudo apt install php
```

## Bugs
- Right now the upload image function is not working:
    - This apears to be due to one or more of the following factors how PHP is configured on csci machines, `.htaccess`, quotas, and file permissions.
    - Suggested workarounds: use a third party hosting service and log urls to the image in the database.
