import { Field, InputType } from '@nestjs/graphql';

// hotel/dto/create-hotel.input.ts
@InputType()
export class CreateHotelInput {
  @Field()
  name: string;

  @Field()
  address: string;

  @Field()
  phone: string;
}
